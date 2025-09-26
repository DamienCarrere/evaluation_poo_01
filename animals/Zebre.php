<?php

class Zebre extends Animal
{

    public function __construct($name)
    {
        parent::__construct($name, "zèbre", "herbivore");
    }
}
