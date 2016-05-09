<?php

namespace NAD\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/admin/login/")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => 'Ali');
    }

    /**
     * @Route("/admin/")
     * @Template()
     */
    public function adminAction()
    {
        return array('name' => 'Ali');
    }
}
