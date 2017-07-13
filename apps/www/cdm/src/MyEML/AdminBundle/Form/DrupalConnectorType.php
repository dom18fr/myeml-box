<?php

namespace MyEML\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;

/**
 * Class DrupalConnectorType
 * @package MyEML\AdminBundle\Form
 */
class DrupalConnectorType extends AbstractType {

    /**
     * @return string
     */
    public function getParent()
    {
        return 'Symfony\Component\Form\Extension\Core\Type\TextType';
    }

    public function getBlockPrefix()
    {
        return 'drupal_connector';
    }

}
