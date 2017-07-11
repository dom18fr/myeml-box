<?php
namespace Drupal\myeml_cdm_connector;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

/**
 * Modifies the finish response subscriber service.
 */
class MyEmlCdmConnectorServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    // Overrides finish_response_subscriber class to allow accessing Drupal from
    // an iframe.
    $definition = $container->getDefinition('finish_response_subscriber');
    $definition->setClass('Drupal\myeml_cdm_connector\Service\IframeResponseSubscriber');
  }
}
