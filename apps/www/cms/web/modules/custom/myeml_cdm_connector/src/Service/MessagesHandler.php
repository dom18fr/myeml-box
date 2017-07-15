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
   * @todo: those alterations should be performed for a dedicated form_mode
   * rather than trigged based on the form_id.
   * This form mode would be used only if a query param is present (isIframe=1)
   *
   * @return mixed
   * @throws \InvalidArgumentException
   */
  public function processSubmitListenerForm($form) {
    $attached = [];
    if (array_key_exists('#attached', $form)) {
      $attached = $form['#attached'];
    }

    // @todo: replace it with proper dependency injection using config factory
    $allowed_origin = \Drupal::config('myeml_cdm_connector.conf')
      ->get('allowed_origin');

    // Transmit config to js and attach library
    $target = null !== $allowed_origin ? $allowed_origin : '*';
    $attached['drupalSettings']['myeml_cdm_connector']['target'] = $target;
    $attached['drupalSettings']['myeml_cdm_connector']['form_dom_id'] = $form['#id'];
    $attached['library'][] = 'myeml_cdm_connector/submit_message_listener';

    $form['#attached'] = $attached;

    // binding the right submit button is a bit complex because of the combo
    // buttons, we should use simple buttons instead
    $form['actions']['publish']['#attributes']['data-submit-trigger'] = $form['#id'];
    // Hide actions since it's handled in cdm
    $form['actions']['#attributes']['class'][] = 'hidden';

    // Pre fill the title using title from cdm
    $default_title = &$form['title']['widget'][0]['value']['#default_value'];
    if (
      $cdm_title = \Drupal::request()->query->get('cdmNodeTitle')
      && null === $default_title
    ) {
      $default_title = $cdm_title;
      // @todo: is hiding title really usefull ?
//      $form['title']['#attributes']['class'][] = 'hidden';
//      $form['title']['widget'][0]['value']['#attributes']['readonly'] = true;
    }

    // Removing advanced sidebar : to be performed in afterbuild to ensure
    // working on its last state.
    $form['#after_build'][] = '\Drupal\myeml_cdm_connector\Service\MessagesHandler::submitListenerFormAfterBuild';

    return $form;
  }

  /**
   * After build callback
   *
   * @param $form
   * @return mixed
   */
  static public function submitListenerFormAfterBuild($form) {
    $form['advanced']['#access'] = false;

    return $form;
  }

}
