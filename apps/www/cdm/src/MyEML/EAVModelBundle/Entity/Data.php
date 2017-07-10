<?php

namespace MyEML\EAVModelBundle\Entity;

use CleverAge\EAVManager\EAVModelBundle\Entity\AbstractData;
use Doctrine\ORM\Mapping as ORM;
use Sidus\EAVModelBundle\Model\FamilyInterface;

/**
 * @ORM\Table(name="myeml_data", indexes={
 *     @ORM\Index(name="family", columns={"family_code"}),
 *     @ORM\Index(name="updated_at", columns={"updated_at"}),
 *     @ORM\Index(name="created_at", columns={"created_at"})
 * })
 * @ORM\Entity(repositoryClass="CleverAge\EAVManager\EAVModelBundle\Entity\DataRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 */
class Data extends AbstractData
{
    public function __construct(FamilyInterface $family)
    {
        parent::__construct($family);

//        $this->setCurrentContext(['campus' => 'lyon']);
    }
}
