<?php

/**
 * @file
 * Provides an additional config form for theme settings.
 */

use Drupal\Core\Form\FormStateInterface;

function accenture_theme_form_system_theme_settings_alter(array &$form, FormStateInterface $form_state) {
  $form['accenture_theme_settings']= array(
    '#type' => 'details',
    '#title' => t('Accenture Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#group' => 'bootstrap',
    '#weight' => 10,
  );
#social links    
  $form['accenture_theme_settings']['contact_info'] = array(
    '#type' => 'details',
    '#title' => t('Contact Info'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['accenture_theme_settings']['contact_info']['contact_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Contact Info Title'),
    '#description' => t('Please enter contact info title'),
    '#default_value' => theme_get_setting('contact_title'),
    '#required' => TRUE,
  ); 
  $form['accenture_theme_settings']['contact_info']['address1'] = array(
    '#type' => 'textfield',
    '#title' => t('Address 1'),
    '#description' => t('Please enter your address url'),
    '#default_value' => theme_get_setting('address1'),
  );
  $form['accenture_theme_settings']['contact_info']['address2'] = array(
    '#type' => 'textfield',
    '#title' => t('Address 2'),
    '#description' => t('Please enter your address2 url'),
    '#default_value' => theme_get_setting('address2'),
  );
  $form['accenture_theme_settings']['contact_info']['email_id'] = array(
    '#type' => 'email',
    '#title' => t('email_id'),
    '#description' => t('Please enter your email'),
    '#default_value' => theme_get_setting('email_id'),
  );
  $form['accenture_theme_settings']['contact_info']['linked_in'] = array(
    '#type' => 'textfield',
    '#title' => t('Linked_in'),
    '#description' => t('Please enter your linked_in url'),
    '#default_value' => theme_get_setting('linked_in'),
  );
  $form['accenture_theme_settings']['contact_info']['facebook'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook'),
    '#description' => t('Please enter your facebook url'),
    '#default_value' => theme_get_setting('facebook'),
  );
  $form['accenture_theme_settings']['contact_info']['youtube'] = array(
    '#type' => 'textfield',
    '#title' => t('Youtube'),
    '#description' => t('Please enter your youtube url'),
    '#default_value' => theme_get_setting('youtube'),
  );
#Footer
  $form['accenture_theme_settings']['footer'] = array(
    '#type' => 'details',
    '#title' => t('Footer'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $footer_description = theme_get_setting('footer_description');
  $form['accenture_theme_settings']['footer']['footer_description'] = array(
    '#type' => 'text_format',
    '#title' => t('Footer Description'),
    '#description' => t('Please enter footer description...'),
    '#default_value' => $footer_description['value'],
    '#format'        => $footer_description['format'],
  );
    
}
 
