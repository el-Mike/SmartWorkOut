<?php
/**
 * This file is a part of SmartWorkout app
 * @copyright Michał Huras <el88mike@gmail.com>
 */

namespace SmartworkoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SmartworkoutBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use SmartworkoutBundle\Form\RegistrationForm as RegistrationForm;

class RegistrationController extends Controller
{
    public function indexAction()
    {
        $form = $this->createForm(new RegistrationForm(), new User());

        return $this->render('SmartworkoutBundle:Registration:registration.html.twig', [
            'form'  => $form->createView()
        ]);
    }

    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(new RegistrationForm(), $user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $form->get("password")->getData());

            $user->setUsername($form->get("username")->getData());
            $user->setPassword($encoded);
            $user->setEmail($form->get("email")->getData());
            $user->setName($form->get("name")->getData());
            $user->setSurname($form->get("surname")->getData());
            $user->setAge($form->get("age")->getData());

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('homepage'));
        }

        return $this->redirect($this->generateUrl('homepage'));
    }
}