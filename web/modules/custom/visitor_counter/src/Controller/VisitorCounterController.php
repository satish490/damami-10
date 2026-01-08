<?php

namespace Drupal\visitor_counter\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class VisitorCounterController extends ControllerBase {

  public function get_visitor_count() {

    \Drupal::service('page_cache_kill_switch')->trigger();
    $connection = \Drupal::database();

    $ip = \Drupal::request()->getClientIp();
    $today = date('Y-m-d');

    $exists = $connection->select('visitor_damami', 'v')
      ->fields('v', ['id'])
      ->condition('client_ip', $ip)
      ->condition('created_date', $today)
      ->execute()
      ->fetchField();

    if (!$exists) {

      $connection->insert('visitor_damami')
        ->fields([
          'client_ip' => $ip,
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

    $count = $connection->select('visitor_counter_damami', 'vc')
      ->fields('vc', ['visitor_count'])
      ->condition('id', 1)
      ->execute()
      ->fetchField();

    $visitor_count = str_pad($count ?: 0, 10, '0', STR_PAD_LEFT);

    return new Response($visitor_count, 200, [
      'Content-Type' => 'text/plain',
    ]);
  }

}
