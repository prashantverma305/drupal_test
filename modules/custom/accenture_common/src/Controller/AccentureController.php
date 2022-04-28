<?php
namespace Drupal\accenture_common\Controller;

class AccentureController {
  public function welcome() {
    return array(
      '#markup' => 'Welcome to our Website.'
    );
  }
}