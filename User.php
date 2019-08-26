<?php


class User
{
    var $id;
    var $name;
    var $surname;
    var $number;

    public function __construct($id, $name, $surname, $number)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->number = $number;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number): void
    {
        $this->number = $number;
    }




}