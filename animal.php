<?php

abstract class Animal
{

    protected string $name;
    protected string $species;
    protected string $diet;

    public function __construct(string $name = "Valentin", string $species, string $diet)
    {

        $this->name = $name;
        $this->species = $species;
        $this->diet = $diet;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSpecies()
    {
        return $this->species;
    }

    public function getDiet()
    {
        return $this->diet;
    }


    abstract public function faireLeShow();


    public function donnerNaissance()
    {
        $babyName = "bébé_" . $this->getSpecies() . "_numero_" . rand(1, 5000);
        return new static($babyName, $this->getSpecies(), $this->getDiet()); // A MODIFIER
    }
}
