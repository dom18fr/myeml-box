<?php

namespace MyEML\EAVModelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ContextSwitcherType extends AbstractType {

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $options = [
            'choices' => [
                'Campus de Lyon' => 'lyon',
                'Campus de Paris' => 'paris',
                'Campus de Shangaï' => 'shangai',
            ],
        ];
        $builder->add('campus', ChoiceType::class, $options);
    }
}
