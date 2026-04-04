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

    $connection = \Drupal::database();

    // Fetch current count directly from DB (read-only, controller handles incrementing)
    $visitor_count = $connection->select('visitor_counter_quavigo', 'vc')
      ->fields('vc', ['visitor_count'])
      ->condition('id', 1)
      ->execute()
      ->fetchField();

    $count_display = ($visitor_count !== FALSE)
      ? str_pad($visitor_count, 10, '0', STR_PAD_LEFT)
      : str_pad(0, 10, '0', STR_PAD_LEFT);

    return [
      '#type'   => 'markup',
      '#markup' => "<p class='mb-0 visitCounter'>Visitors: {$count_display}</p>",
      // Ensure Drupal does NOT cache this block
      '#cache'  => ['max-age' => 0],
    ];
  }

  public function getCacheMaxAge() {
    return 0;
  }

}
