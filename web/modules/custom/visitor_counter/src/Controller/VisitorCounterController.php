<?php

namespace Drupal\visitor_counter\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class VisitorCounterController extends ControllerBase {

  public function get_visitor_count() {
    // Kill page cache so every request is fresh
    \Drupal::service('page_cache_kill_switch')->trigger();

    $ipaddress = \Drupal::request()->getClientIp();
    $connection = \Drupal::database();
    $today = date('Y-m-d');

    // 1. Check if this IP has already visited today
    $already_visited = $connection->select('visitor_quavigo', 'vq')
      ->fields('vq', ['id'])
      ->condition('client_ip', $ipaddress)
      ->condition('created_date', $today)
      ->execute()
      ->fetchField();

    if ($already_visited === FALSE) {
      // New IP for today — log the visit
      $connection->insert('visitor_quavigo')
        ->fields([
          'client_ip'    => $ipaddress,
          'created_date' => $today,
        ])
        ->execute();

      // 2. Check if the counter row exists (id=1)
      $existing = $connection->select('visitor_counter_quavigo', 'vc')
        ->fields('vc', ['visitor_count'])
        ->condition('id', 1)
        ->execute()
        ->fetchField();

      if ($existing === FALSE) {
        // Row doesn't exist — insert with count = 1
        $connection->insert('visitor_counter_quavigo')
          ->fields([
            'id'            => 1,
            'visitor_count' => 1,
          ])
          ->execute();
        $new_count = 1;
      } else {
        // Increment only for new unique IP
        $new_count = $existing + 1;
        $connection->update('visitor_counter_quavigo')
          ->fields(['visitor_count' => $new_count])
          ->condition('id', 1)
          ->execute();
      }
    } else {
      // Same IP visited today — just return current count, do NOT increment
      $new_count = $connection->select('visitor_counter_quavigo', 'vc')
        ->fields('vc', ['visitor_count'])
        ->condition('id', 1)
        ->execute()
        ->fetchField();

      $new_count = $new_count !== FALSE ? $new_count : 0;
    }

    // 3. Return JSON
    return new JsonResponse(['visitor_count' => $new_count]);
  }

}