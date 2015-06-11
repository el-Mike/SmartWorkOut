<?php

namespace SmartworkoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SmartworkoutBundle:Default:index.html.twig', array('name' => $name));
    }
}
