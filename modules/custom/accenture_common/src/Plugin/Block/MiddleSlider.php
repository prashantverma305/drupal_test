<?php

namespace Drupal\accenture_common\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\Entity\Node;
use Drupal\file\Entity\File;
use Drupal\media\Entity\Media;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "Middle_slider",
 *   admin_label = @Translation("Middle Slider"),
 *   category = @Translation("Middle Slider for middle section"),
 * )
 */
class MiddleSlider extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $nids = \Drupal::entityQuery('node')
            ->condition('type','networks')
            ->condition('status', 1)
            ->sort('field_network', 'DESC')
            ->execute();
    $nodes =  Node::loadMultiple($nids);

    foreach($nodes as $node ){
      $networkValue = '';

      if(isset($node->get('field_network')->getValue()[0]['value'])){

        $networkValue = $node->get('field_network')->getValue()[0]['value'];
        $speedValue = $node->get('field_speed')->getValue()[0]['value'];
        $offerIMGUrl = file_create_url($node->get('field_image')->entity->getFileUri());

        $data[$networkValue]['NetworkDetails'] = array(
            'body' => $node->get('body')->getValue()[0]['value'],
            'speed' => $speedValue,
            'Network_image' => isset($offerIMGUrl)?$offerIMGUrl:'', 
            'nid' => $node->id(),
            'NetworkID' => $networkValue,
          );
      }
      
    }

    return [
      '#theme' => 'middle-slider-block',
      '#network' => $data,
    ];
  }


}