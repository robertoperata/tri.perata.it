<?php

namespace Priz\FoodBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PrizFoodBundle:Default:index.html.twig', array('name' => $name));
    }
}
