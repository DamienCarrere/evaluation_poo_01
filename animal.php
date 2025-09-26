<?php

class Animal
{

    protected string $name;
    protected string $species;
    protected string $diet;

    public function __construct(string $name, string $species, string $diet)
    {

        $this->name = $name;
        $this->species = $species;
        $this->diet = $diet;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getspecies()
    {
        return $this->species;
    }

    public function getdiet()
    {
        return $this->diet;
    }

    public function faireLeShow()
    {
        echo "Cet animal " . $this->diet . " qui est un " . $this->species . " et qui s'appelle " . $this->name . " fait le show!";
    }

    public function donnerNaissance()
    {
        echo "DONNE NAISSANCE"; // A MODIFIER
    }
}
