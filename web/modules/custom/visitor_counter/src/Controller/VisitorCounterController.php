<?php

namespace Drupal\visitor_counter\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class VisitorCounterController extends ControllerBase {

  /**
   * Original controller – keeps your logic and markup.
   */
  public function get_visitor_count() {

    \Drupal::service('page_cache_kill_switch')->trigger();
    $connection = \Drupal::database();

    // Client IP
    $ipaddress = \Drupal::request()->getClientIp();
    $today = date('Y-m-d');

    // Check if already counted today
    $exists = $connection->select('visitor_damami', 'vd')
      ->fields('vd', ['id'])
      ->condition('client_ip', $ipaddress)
      ->condition('created_date', $today)
      ->execute()
      ->fetchField();

    // Insert record + increase count
    if (!$exists) {

      $connection->insert('visitor_damami')
        ->fields([
          'client_ip' => $ipaddress,
          'created_date' => $today,
        ])
        ->execute();

      $count = $connection->select('visitor_counter_damami', 'vc')
        ->fields('vc', ['visitor_count'])
        ->condition('id', 1)
        ->execute()
        ->fetchField();

      $connection->update('visitor_counter_damami')
        ->fields([
          'visitor_count' => ((int) $count) + 1,
        ])
        ->condition('id', 1)
        ->execute();
    }

    // Always fetch final count
    $count = $connection->select('visitor_counter_damami', 'vc')
      ->fields('vc', ['visitor_count'])
      ->condition('id', 1)
      ->execute()
      ->fetchField();

    $visitor_count = str_pad($count ?: 0, 10, '0', STR_PAD_LEFT);

    return [
      '#type' => 'container',
      '#attributes' => ['class' => ['visitCounter']],
      'content' => [
        '#markup' => "<p class='mb-0'>Visitors: {$visitor_count}</p>",
      ],
      '#attached' => [
        'library' => [
          'visitor_counter/visitor_counter',
        ],
      ],
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

  /**
   * AJAX endpoint – returns ONLY number (echo style).
   */
  public function get_visitor_count_ajax() {

    \Drupal::service('page_cache_kill_switch')->trigger();
    $connection = \Drupal::database();

    $count = $connection->select('visitor_counter_damami', 'vc')
      ->fields('vc', ['visitor_count'])
      ->condition('id', 1)
      ->execute()
      ->fetchField();

    $visitor_count = str_pad($count ?: 0, 10, '0', STR_PAD_LEFT);

    // This works like echo
    return new Response($visitor_count);
  }

}
