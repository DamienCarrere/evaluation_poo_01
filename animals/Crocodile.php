<?php

class Crocodile extends Animal
{

    public function __construct($name)
    {
        parent::__construct($name, "crocodile", "carnivore");
    }
}
