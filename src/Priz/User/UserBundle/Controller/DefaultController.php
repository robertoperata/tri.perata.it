<?php

namespace Priz\User\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PrizUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
