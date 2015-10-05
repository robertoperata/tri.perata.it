<?php

namespace Priz\TriBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Priz\User\UserBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PrizTriBundle:Default:index.html.twig', array('name' => $name));
    }

    public function dashboardAction(){
        // name
        $user = new User();
        $repository = $this->getDoctrine()->getRepository('PrizUserBundle:User');
        $user = $repository->findOneBy(array('username' => 'priz'));

        $usr= $this->get('security.context')->getToken()->getUser();
        $usr->getUsername();

        //last activities

        // goal

        //next session

        return $this->render('PrizTriBundle:Tri:dashboard.html.twig', array( 'user' => $user, 'usr' => $usr ));
    }

    public function createATPAction(){

        return $this->render('PrizTriBundle:Tri:createATP.html.twig');
    }
}
