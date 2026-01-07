<?php

namespace Drupal\visitor_counter\Controller;

use Drupal\Core\Controller\ControllerBase;

class VisitorCounterController extends ControllerBase {

  public function get_visitor_count() {

    // disable page cache for this request
    \Drupal::service('page_cache_kill_switch')->trigger();

    $connection = \Drupal::database();

    // get user ip
    $ip = \Drupal::request()->getClientIp();
    $today = date('Y-m-d');

    // ---------- check if IP already visited today ----------
    $exists = $connection->select('visitor_damami', 'vd')
      ->fields('vd', ['id'])
      ->condition('client_ip', $ip)
      ->condition('created_date', $today)
      ->execute()
      ->fetchField();

    // ---------- only count when new ip today ----------
    if (!$exists) {

      // log ip
      $connection->insert('visitor_damami')
        ->fields([
          'client_ip' => $ip,
          'created_date' => $today,
        ])
        ->execute();

      // get existing count
      $count = $connection->select('visitor_counter_damami', 'vc')
        ->fields('vc', ['visitor_count'])
        ->condition('id', 1)
        ->execute()
        ->fetchField();

      // update count
      $connection->update('visitor_counter_damami')
        ->fields([
          'visitor_count' => ((int) $count) + 1,
        ])
        ->condition('id', 1)
        ->execute();
    }

    // ---------- always fetch latest value ----------
    $count = $connection->select('visitor_counter_damami', 'vc')
      ->fields('vc', ['visitor_count'])
      ->condition('id', 1)
      ->execute()
      ->fetchField();

    // pad 10 digit
    $visitor_count = str_pad($count ?: 0, 10, '0', STR_PAD_LEFT);

    // return ONLY number (not html text)
    return [
      '#markup' => $visitor_count,
      '#cache' => ['max-age' => 0],
    ];
  }

}

