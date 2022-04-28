<?php

namespace Drupal\accenture_common\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\Entity\Node;
use Drupal\file\Entity\File;
use Drupal\media\Entity\Media;
use Drupal\media\Entity\MediaType;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "Home_slider",
 *   admin_label = @Translation("Home Front Slider"),
 *   category = @Translation("Home Front Slider for middle section"),
 * )
 */
class homeSlider extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $nids = \Drupal::entityQuery('node')
            ->condition('type','front_home_slider')
            ->condition('status', 1)
            ->execute();
    $nodes =  Node::loadMultiple($nids);
    foreach($nodes as $node){
        // kint($node);
        $nid = $node->id();
        $SliderTitle = $node->get('title')->getValue()[0]['value'];
        $SubTitle = $node->get('field_sub_title')->getValue()[0]['value'];
        $deskTopImg = homeSlider::getSliderImagePathFromFid($node->get('field_desktop_image')->target_id);
        $mobileImg = homeSlider::getSliderImagePathFromFid($node->get('field_mobile_image')->target_id);
        $link_url = $node->get('field_link')->uri;
        $link_title = $node->get('field_link')->title;
        $media = Media::load($node->get('field_video_upload')->target_id);
        // $media = isset($media)?$media:'';
        // if($media != ''){
        //   $mediaurl = $media->get('mid')->value;
        //   $mediaurlpath = Media::load($mediaurl);
        //   $uri = $mediaurlpath->field_media_video_file->entity->getFileUri(); 
        //   kint(file_create_url($uri));
        // }
        $video_url = homeSlider::getSliderVideoPathFromFid($media);
        $data[$nid]['SliderDetails'] = array(
            'SliderTitle' => $SliderTitle,
            'SubTitle' => $SubTitle,
            'deskTopImg' => isset($deskTopImg)?$deskTopImg:'', 
            'mobileImg' => isset($mobileImg)?$mobileImg:'', 
            'mobileImg' => isset($mobileImg)?$mobileImg:'', 
            'link_url' => $link_url, 
            'link_title' => $link_title, 
            'video' => isset($video_url)?$video_url:'',
            'nid' => $nid,
          );
    }
    
    return [
      '#theme' => 'slider-block',
      '#homeslider' => $data,
    ];
  }

  /**
   * Returns image path from fid.
   *
   * @return type string
   *  File path.
   */
  public static function getSliderImagePathFromFid($fid) {
    if(!empty($fid) && isset($fid)){
      $file = File::load($fid);
      $file_uri = $file->getFileUri();
      $imagefile = file_create_url($file_uri);
    }else{
      $imagefile = '';
    }
      return $imagefile;
  }

  /**
   * Returns image path from fid.
   *
   * @return type string
   *  File path.
   */
  public static function getSliderVideoPathFromFid($mid) {
    if(!empty($mid) && isset($mid)){
      $mediaurl = $mid->get('mid')->value;
      $mediaurlpath = Media::load($mediaurl);
      $uri = $mediaurlpath->field_media_video_file->entity->getFileUri(); 
      $video_url = file_create_url($uri);
    }else{
      $video_url = '';
    }
      return $video_url;
  }

}