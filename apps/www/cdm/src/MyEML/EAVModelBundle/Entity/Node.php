<?php

namespace MyEML\EAVModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="CleverAge\EAVManager\EAVModelBundle\Entity\DataRepository")
 */
class Node extends Data
{
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
