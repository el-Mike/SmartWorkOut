<?php
/**
 * This file is a part of SmartWorkout app
 * @copyright Michał Huras <el88mike@gmail.com>
 */

namespace SmartworkoutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface as UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     *
     * @ORM\Column(type="string", length=20, unique=true)
     */
    protected $username;

    /**
     * @var
     *
     * @ORM\Column(type="string", length=64)
     */
    protected $password;

    /**
     * @var
     *
     * @ORM\Column(type="string", length=20, unique=true)
     */
    protected $email;

    /**
     * @var
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    protected $isActive;

    /**
     * @var
     * @ORM\Column(type="string", length=20)
     */
    protected $name;

    /**
     * @var
     * @ORM\Column(type="string", length=20)
     */
    protected $surname;

    /**
     * @var
     * @ORM\Column(type="integer")
     */
    protected $age;

    /**
     *
     */
    public function __construct()
    {
        $this->isActive = true;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * @return null
     */
    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials()
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $value
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $value
     */
    public function setUsername($value)
    {
        $this->username = $value;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $value
     */
    public function setPassword($value)
    {
        $this->password = $value;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $value
     */
    public function setEmail($value)
    {
        $this->email = $value;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $value
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param $value
     */
    public function setSurname($value)
    {
        $this->surname = $value;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param $value
     */
    public function setAge($value)
    {
        $this->age = $value;
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password
        ));
    }

    public function unserialize($value)
    {
        list (
            $this->id,
            $this->username,
            $this->password
        ) = serialize($value);
    }
}