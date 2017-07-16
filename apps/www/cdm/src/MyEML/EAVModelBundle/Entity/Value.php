<?php

namespace MyEML\EAVModelBundle\Entity;

use CleverAge\EAVManager\EAVModelBundle\Entity\AbstractValue;
use Doctrine\ORM\Mapping as ORM;
use Sidus\EAVModelBundle\Entity\DataInterface;
use Sidus\EAVModelBundle\Model\AttributeInterface;

/**
 * @ORM\Table(name="myeml_value", indexes={
 *     @ORM\Index(name="attribute", columns={"attribute_code"}),
 *     @ORM\Index(name="string_search", columns={"attribute_code", "string_value"}),
 *     @ORM\Index(name="int_search", columns={"attribute_code", "integer_value"}),
 *     @ORM\Index(name="position", columns={"position"})
 * })
 * @ORM\Entity(repositoryClass="Sidus\EAVModelBundle\Entity\ValueRepository")
 */
class Value extends AbstractValue
{
    /**
     * @var string
     *
     * @ORM\Column(name="campus", type="text", nullable=true)
     */
    protected $campus;

    /**
     * @var string
     *
     * @ORM\Column(name="program", type="text", nullable=true)
     */
    protected $program;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="text", nullable=true)
     */
    protected $locale;

    /**
     * @var string
     *
     * @ORM\Column(name="profile", type="text", nullable=true)
     */
    protected $profile;

    /**
     * @return array
     */
    public function getContextKeys()
    {
        return [
            'campus',
            'program',
            'locale',
            'profile',
        ];
    }

    /**
     * @return string
     */
    public function getCampus()
    {
        return $this->campus;
    }

    /**
     * @param string $campus
     */
    public function setCampus($campus)
    {
        $this->campus = $campus;
    }

    /**
     * @return string
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * @param string $program
     */
    public function setProgram($program)
    {
        $this->program = $program;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param string $profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    }

}
