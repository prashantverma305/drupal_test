<?php
namespace Drupal\accenture_common\Controller;

class AccentureController {
  public function welcome() {
    $data = \Drupal::service('accenture_common.custom_services')->getData();
    return array(
      '#markup' => $data
    );
  }
}