<?php

namespace Drupal\visitor_counter\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Database\Database;

/**
 * @Block(
 *   id = "visitor_counter_block",
 *   admin_label = @Translation("Visitor Counter")
 * )
 */
class VisitorCounterBlock extends BlockBase {

  public function build() {

    $connection = Database::getConnection();

    $count = $connection->select('visitor_counter_damami', 'vc')
      ->fields('vc', ['visitor_count'])
      ->condition('id', 1)
      ->execute()
      ->fetchField();

    $visitor_count = str_pad($count ?: 0, 10, '0', STR_PAD_LEFT);

    return [
      '#markup' => '<div class="visitCounter">Visitors : ' . $visitor_count . '</div>',
      '#cache' => ['max-age' => 0],
    ];
  }

}
