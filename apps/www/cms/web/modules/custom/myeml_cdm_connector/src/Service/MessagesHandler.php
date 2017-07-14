<?php

namespace Drupal\myeml_cdm_connector\Service;

/**
 * Class MessagesHandler
 * @package Drupal\myeml_cdm_connector\Service
 */
class MessagesHandler {

  /**
   * @param $form
   *
   * @return mixed
   */
  public function processSubmitListenerForm($form) {
    $attached = [];
    if (array_key_exists('#attached', $form)) {
      $attached = $form['#attached'];
    }

    // @todo: replace it with proper dependency injection using config factory
    $allowed_origin = \Drupal::config('myeml_cdm_connector.conf')
      ->get('allowed_origin');
    $target = null !== $allowed_origin ? $allowed_origin : '*';
    $attached['drupalSettings']['myeml_cdm_connector']['target'] = $target;
    $attached['drupalSettings']['myeml_cdm_connector']['form_dom_id'] = $form['#id'];
    $attached['library'][] = 'myeml_cdm_connector/submit_message_listener';

    $form['#attached'] = $attached;

    // Remove actions since it's handled in cdm
    $form['actions']['#access'] = false;

    return $form;
  }

}
