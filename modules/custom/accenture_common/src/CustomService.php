<?php

namespace Drupal\accenture_common;

use Drupal\Core\Session\AccountInterface;

/**
 * Class CustomService
 * @package Drupal\accenture_common\Services
 */
class CustomService {

  protected $currentUser;

  /**
   * CustomService constructor.
   * @param AccountInterface $currentUser
   */
  public function __construct(AccountInterface $currentUser) {
    $this->currentUser = $currentUser;
  }


  /**
   * @return \Drupal\Component\Render\MarkupInterface|string
   */
  public function getData() {
      
    //   $user_data = array(
    //     'username' => $this->currentUser->getDisplayName(),
    //   );
    $user_data = $this->currentUser->getDisplayName();
    return $user_data;
  }

}