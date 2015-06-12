<?php

namespace SmartworkoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        return $this->render('SmartworkoutBundle:Homepage:homepage.html.twig', array('name' => "Michal"));
    }
}
