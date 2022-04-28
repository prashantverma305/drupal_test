<?php

namespace Drupal\accenture_common\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\Entity\Node;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "feature_block",
 *   admin_label = @Translation("Home Feautre Block"),
 *   category = @Translation("Home Feautre for middle section"),
 * )
 */
class FeatureBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $nids = \Drupal::entityQuery('node')
            ->condition('type','feature')
            ->condition('status', 1)
            ->sort('created','DESC')
            ->range(0, 4)
            ->execute();
    $nodes =  Node::loadMultiple($nids);
    foreach($nodes as $node){
      $nid = $node->id();
      $title = $node->get('title')->getValue()[0]['value'];
      $form = $node->get('field_from')->getValue()[0]['value'];
      $to = $node->get('field_to')->getValue()[0]['value'];
      
      $data[$nid]['featureDetail'] = array(
        'featuretitle' => $title,
        'from' => $form,
        'to' => $to, 
        'body' => $node->get('body')->getValue()[0]['value'],
        'nid' => $nid,
      );
    }
    return [
      '#theme' => 'feature-block',
      '#feature' => $data,
    ];
  }



}