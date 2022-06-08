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
    $nids = \Drupal::entityQuery('node')
            ->condition('type','faqs')
            ->condition('status', 1)
            ->sort('created','DESC')
            ->execute();
    $nodes =  Node::loadMultiple($nids);

    $faqs_countries = \Drupal::service('entity_type.manager')->getStorage("taxonomy_term")->loadTree('faqs');
    foreach($faqs_countries as $faqs) {
      $terms[] = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($faqs->tid);
      $data['faqs'] = $terms;
    }

    foreach($nodes as $node){
      $nid = $node->id();
      $title = $node->get('title')->getValue()[0]['value'];
      $body  = $node->get('body')->getValue()[0]['value'];

      $data[$nid]['faqsDetail'] = array(
        'featuretitle' => $title,
        'body' => $body,
        'nid' => $nid,
      );
    }

    return [
      '#theme' => 'faq-block',
      '#faqs' => $data,
    ];
  }


}