<?php
/**
 * This file is a part of SmartWorkout app
 * @copyright Michał Huras <el88mike@gmail.com>
 */

namespace SmartworkoutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
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
     * @ORM\Column(type="string", length=20)
     */
    protected $username;

    /**
     * @var
     *
     * @ORM\Column(type="string", length=50)
     */
    protected $pass;

    /**
     * @var
     *
     * @ORM\Column(type="string", length=20)
     */
    protected $email;

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
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param $value
     */
    public function setPass($value)
    {
        $this->pass = $value;
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
}