<?php
namespace Drupal\myeml_cdm_connector\Service;

use Drupal\Core\EventSubscriber\FinishResponseSubscriber;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

/**
 * Extends FinishResponseSubscriber to allow accessing Drupal from an iframe.
 */
class IframeResponseSubscriber extends FinishResponseSubscriber {

  /**
   * {@inheritdoc}
   */
  public function onRespond(FilterResponseEvent $event) {
    parent::onRespond($event);

    $response = $event->getResponse();
    $response->headers->remove('X-Frame-Options');

    $allowed_origin = \Drupal::config('myeml_cdm_connector.conf')->get('allowed_origin');
    if (!empty($allowed_origin)) {
      // Use Content-Security-Policy beacause X-Frame-Options ALLOW-FROM
      // directive is not supported by Chrome.
      $response->headers->set('Content-Security-Policy', 'frame-ancestors ' . $allowed_origin, TRUE);
    }
  }

}
