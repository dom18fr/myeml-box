<?php

namespace MyEML\AdminBundle\Controller;

use CleverAge\EAVManager\AdminBundle\Controller\EAVDataController;
use Sidus\EAVModelBundle\Model\FamilyInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class TreeViewController
 * @package MyEML\AdminBundle\Controller
 */
class TreeViewController extends EAVDataController {

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @throws \Exception
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function indexAction(Request $request)
    {
        return $this->redirectToAction('treeview', ['familyCode' => 'Node']);
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Sidus\EAVModelBundle\Model\FamilyInterface $family
     *
     * @throws \Exception
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function treeviewAction(Request $request, FamilyInterface $family)
    {
        return $this->renderAction(
            [
                'admin' => $this->admin,
                'isAjax' => false,
            ]
        );
    }
}
