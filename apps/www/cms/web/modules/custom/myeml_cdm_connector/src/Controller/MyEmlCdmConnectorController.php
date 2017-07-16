<?php
namespace Drupal\myeml_cdm_connector\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Render\Renderer;
use Drupal\node\Entity\Node;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;


class MyEmlCdmConnectorController extends ControllerBase {

  /**
   * The renderer.
   *
   * @var \Drupal\Core\Render\RendererInterface
   */
  protected $renderer;

  /**
   * MyEmlCdmConnectorController constructor.
   *
   * @param \Drupal\Core\Render\Renderer $renderer
   */
  public function __construct(Renderer $renderer) {
    $this->renderer = $renderer;
  }

  /**
   * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
   *
   * @throws \Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException
   * @throws \Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException
   *
   * @return static
   */
  public static function create(ContainerInterface $container) {
    /** @var Renderer $renderer */
    $renderer = $container->get('renderer');
    return new static(
      $renderer
    );
  }

  /**
   * Output rendered node in JSON.
   *
   * @param $nid
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   */
  public function nodeView($nid) {

    $node = Node::load($nid);
    $node_view = node_view($node);

    $response = [
      'id' => $node->id(),
      'title' => $node->getTitle(),
      'content' => $this->renderer->render($node_view),
    ];

    return new JsonResponse($response);
  }

}
