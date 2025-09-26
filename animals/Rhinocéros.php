<?php
require_once(__DIR__ . "/../animal.php");

class Rhinocéros extends Animal
{

    public function __construct($name = "Valentin")
    {

        parent::__construct($name, "rhinocéros", "herbivore");
    }
    public function faireLeShow()
    {
        echo "<p>Cet animal " . $this->diet . " qui est un " . $this->species . " et qui s'appelle " . $this->name . " barrit!</p>";
    }
}
