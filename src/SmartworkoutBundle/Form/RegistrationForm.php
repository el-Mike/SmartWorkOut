<?php
/**
* This file is a part of SmartWorkout app
* @copyright Michał Huras <el88mike@gmail.com>
*/
namespace SmartworkoutBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationForm extends AbstractType
{

    /**
     * @param FormBuilderInterface $builderInterface
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builderInterface, array $options)
    {
        $builderInterface->add('username', 'text');
        $builderInterface->add('pass', 'password');
        $builderInterface->add('email', 'email');
        $builderInterface->add('name', 'text');
        $builderInterface->add('surname', 'text');
        $builderInterface->add('age', 'integer');
        $builderInterface->add('save', 'submit');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'registrationForm';
    }
}