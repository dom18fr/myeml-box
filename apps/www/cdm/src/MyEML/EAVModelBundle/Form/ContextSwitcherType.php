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

        $contexts = [
            'campus' => [
                'Campus de Lyon' => 'lyon',
                'Campus de Paris' => 'paris',
                'Campus de Shangaï' => 'shangai',
            ],
            'program' => [
                'Master 1' => 'm1',
                'Master 2' => 'm2',
            ],
            'locale' => [
                'Français' => 'fr_FR',
                'English' => 'en_US',
            ],
            'profile' => [
                'Étudiant' => 'student',
                'Enseignant' => 'teacher',
            ],
        ];

        foreach ($contexts as $contextKey => $contextValues) {
            $builder->add($contextKey, ChoiceType::class, ['choices' => $contextValues]);
        }
    }
}
