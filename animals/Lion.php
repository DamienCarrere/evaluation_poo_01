<?php

class Lion extends Animal
{

    public function __construct($name)
    {
        parent::__construct($name, "lion", "carnivore");
    }
}
