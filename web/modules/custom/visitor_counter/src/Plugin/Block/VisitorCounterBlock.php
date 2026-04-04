<?php

namespace Drupal\visitor_counter\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "visitor_counter_block",
 *   admin_label = @Translation("Visitor Counter Block"),
 *   category = @Translation("Custom")
 * )
 */
class VisitorCounterBlock extends BlockBase {

  public function build() {
    // Kill page cache so the block is always fresh
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

      // Check if counter row exists
      $existing = $connection->select('visitor_counter_quavigo', 'vc')
        ->fields('vc', ['visitor_count'])
        ->condition('id', 1)
        ->execute()
        ->fetchField();

      if ($existing === FALSE) {
        $connection->insert('visitor_counter_quavigo')
          ->fields([
            'id'            => 1,
            'visitor_count' => 1,
          ])
          ->execute();
        $visitor_count = 1;
      } else {
        $visitor_count = $existing + 1;
        $connection->update('visitor_counter_quavigo')
          ->fields(['visitor_count' => $visitor_count])
          ->condition('id', 1)
          ->execute();
      }
    } else {
      // Same IP today — just fetch current count, do NOT increment
      $visitor_count = $connection->select('visitor_counter_quavigo', 'vc')
        ->fields('vc', ['visitor_count'])
        ->condition('id', 1)
        ->execute()
        ->fetchField();

      $visitor_count = ($visitor_count !== FALSE) ? $visitor_count : 0;
    }

    $count_display = str_pad($visitor_count, 10, '0', STR_PAD_LEFT);

    return [
      '#type'   => 'markup',
      '#markup' => "<p class='mb-0 visitCounter'>Visitors: {$count_display}</p>",
      '#cache'  => ['max-age' => 0],
    ];
  }

  public function getCacheMaxAge() {
    return 0;
  }

}