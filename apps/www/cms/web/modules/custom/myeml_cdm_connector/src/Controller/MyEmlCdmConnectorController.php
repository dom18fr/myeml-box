<?php
namespace Drupal\myeml_cdm_connector\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\JsonResponse;


class MyEmlCdmConnectorController extends ControllerBase {

  public function nodeView($nid) {

    $node = Node::load($nid);
    $node_view = node_view($node);

    $response = [
      'id' => $node->id(),
      'title' => $node->getTitle(),
      'content' => render($node_view),
    ];

    return new JsonResponse($response);
  }

}
