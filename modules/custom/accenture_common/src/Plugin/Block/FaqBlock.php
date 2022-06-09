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
      foreach($terms as $key => $term){
        $tid = $term->get('tid')->getValue()[0]['value'];
        $name = $term->get('name')->getValue()[0]['value'];
        $description = $term->get('description')->getValue()[0]['value'];

        $data[$tid]['terms'] = array(
          'tid' => $tid,
          'name' => $name,
          'description' => $description
        );
      }
    }

    foreach($nodes as $node){
      $nid = $node->id();
      $title = $node->get('title')->getValue()[0]['value'];
      $body  = $node->get('body')->getValue()[0]['value'];
      $tid = $node->get('field_faqs_category')->target_id;

      $faqsdata[$nid]['faqsData'] = array(
        'featuretitle' => $title,
        'body' => $body,
        'nid' => $nid,
        'tid' => $tid
      );
    }

    return [
      '#theme' => 'faq-block',
      '#faqs' => $data,
      '#faqsDetails' => $faqsdata
    ];
  }


}