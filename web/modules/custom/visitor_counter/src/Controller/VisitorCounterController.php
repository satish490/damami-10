<?php

namespace Drupal\visitor_counter\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class VisitorCounterController extends ControllerBase {

  public function get_visitor_count() {
    $connection = \Drupal::database();
    $request    = \Drupal::request();

    // Get real client IP
    $client_ip = $request->getClientIp();
    $today     = date('Y-m-d');

    // ✅ Check if this IP already visited TODAY
    $existing = $connection->select('visitor_quavigo', 'vq')
      ->fields('vq', ['id'])
      ->condition('client_ip', $client_ip)
      ->condition('created_date', $today . ' %', 'LIKE')
      ->execute()
      ->fetchField();

    if (!$existing) {
      // New unique visitor for today — log and increment
      $connection->insert('visitor_quavigo')
        ->fields([
          'client_ip'    => $client_ip,
          'created_date' => date('Y-m-d H:i:s'),
        ])
        ->execute();

      $connection->update('visitor_counter_quavigo')
        ->expression('visitor_count', 'visitor_count + :inc', [':inc' => 1])
        ->condition('id', 1)
        ->execute();
    }

    // Always return current count
    $visitor_count = $connection->select('visitor_counter_quavigo', 'vc')
      ->fields('vc', ['visitor_count'])
      ->condition('id', 1)
      ->execute()
      ->fetchField();

    return new JsonResponse([
      'visitor_count' => (int) $visitor_count,
    ]);
  }

}