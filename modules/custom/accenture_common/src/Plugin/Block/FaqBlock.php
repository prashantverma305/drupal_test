<?php

namespace Drupal\accenture_common\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\Entity\Node;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "faqs_block",
 *   admin_label = @Translation("Home Faqs "),
 *   category = @Translation("Home Faqs section"),
 * )
 */
class FaqBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $db = \Drupal::database();
    $query = $db->select('node', 'n')
      ->condition('n.type', 'faq')
      ->fields('n');
    $result = $query->execute()->fetchAll();
    $nids = [];
    foreach($result as $rec){
      $nids[] = $rec->nid;
    }
    // $nodes = Node::loadMultiple($nids);
    foreach($nids as $nidint){
      $node = \Drupal\node\Entity\Node::load($nidint);
      $data[] = array(
        'field_network' => $node->get('field_network')->getValue(),
        'body' => $node->get('body')->getValue(),
        // 'field_image' => MiddleSlider::getSliderImagePathFromFid($node->get('field_image')->target_id),
      );
    }

    return [
      '#theme' => 'faq-block',
      '#slider' => [
        'details' => $data,
      ],
    ];
  }


  /**
   * Returns image path from fid.
   *
   * @return type string
   *  File path.
   */
  public static function getSliderImagePathFromFid($fid) {
    $file = \Drupal\file\Entity\File::load($fid);
    return \Drupal\image\Entity\ImageStyle::load('nostyle')->buildUrl($file->getFileUri());
  }

}