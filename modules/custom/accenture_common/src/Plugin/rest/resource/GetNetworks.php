<?php
namespace Drupal\accenture_common\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides a Demo Resource
 *
 * @RestResource(
 *   id = "networks",
 *   label = @Translation("Network Listing"),
 *   uri_paths = {
 *     "canonical" = "/get/networks"
 *   }
 * )
 */
class GetNetworks extends ResourceBase {

  /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */
  public function get() {
    $response = ['message' => 'Hello, this is a rest service'];
    return new ResourceResponse($response);
  }
}