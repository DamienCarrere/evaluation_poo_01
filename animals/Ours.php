<?php
require_once "../animal.php";

class Ours extends Animal
{

    public function __construct($name)
    {
        parent::__construct($name, "ours", "carnivore");
    }
}
