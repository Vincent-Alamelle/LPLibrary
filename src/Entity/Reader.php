<?php


namespace Alexandrie\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Alexandrie\Repository\ReaderRepository")
 */
class Reader
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $last_name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $birth_date;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * Reader constructor.
     * @param $id
     * @param $first_name
     * @param $last_name
     * @param $birth_date
     * @param $email
     */
    public function __construct($id, $first_name, $last_name, $birth_date, $email)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->birth_date = $birth_date;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * @param mixed $birth_date
     */
    public function setBirthDate($birth_date): void
    {
        $this->birth_date = $birth_date;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }




}