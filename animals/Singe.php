<?php

class Singe extends Animal
{

    public function __construct($name)
    {
        parent::__construct($name, "singe", "herbivore");
    }
}
