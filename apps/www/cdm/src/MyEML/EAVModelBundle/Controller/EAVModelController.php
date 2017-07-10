<?php

namespace MyEML\EAVModelBundle\Controller;

use MyEML\EAVModelBundle\Form\ContextSwitcherType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class EAVModelController extends Controller {

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        /** @var Form $form */
        $form = $this->createForm(ContextSwitcherType::class);

        $params = [
            'form' => $form->createView(),
        ];
        return $this->render('MyEMLEAVModelBundle::context_switcher_form.html.twig', $params);
    }
}
