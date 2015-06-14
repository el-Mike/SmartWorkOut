<?php
/**
 * This file is a part of SmartWorkout app
 * @copyright Michał Huras <el88mike@gmail.com>
 */

namespace SmartworkoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SmartworkoutBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class HomepageController extends Controller
{
    public function indexAction()
    {
        return $this->render('SmartworkoutBundle:Homepage:homepage.html.twig');
    }
}
