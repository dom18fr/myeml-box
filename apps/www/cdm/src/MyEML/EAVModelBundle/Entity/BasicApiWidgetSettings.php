<?php

namespace MyEML\EAVModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sidus\EAVModelBundle\Model\FamilyInterface;

/**
 * @ORM\Entity(repositoryClass="CleverAge\EAVManager\EAVModelBundle\Entity\DataRepository")
 */
class BasicApiWidgetSettings extends Data
{

  public function __construct(FamilyInterface $family)
  {
    parent::__construct($family);
    /** @var \Sidus\EAV\BasicApiWidgetSettings $this */
    $this->setSettingsId(uniqid('basicapiwidgetsettings-', false));
  }

  /**
   * @throws \Sidus\EAVModelBundle\Exception\ContextException
   *
   * @return \Sidus\EAV\Node
   */
  public function getParentNodes()
  {
    $parentNodes = [];
    foreach ($this->getRefererDatas() as $parentNode) {
      if (is_a($parentNode, Node::class)) {
        $parentNodes[] = $parentNode;
      }
    }

    return 0 === count($parentNodes) ? null : $parentNodes;
  }
}
