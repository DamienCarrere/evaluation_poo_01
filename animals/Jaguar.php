<?php
require_once(__DIR__ . "/../animal.php");

class Jaguar extends Animal
{

    public function __construct($name = "Valentin")
    {

        parent::__construct($name, "jaguar", "carnivore");
    }
    public function faireLeShow()
    {
        echo "<p>Cet animal " . $this->diet . " qui est un " . $this->species . " et qui s'appelle " . $this->name . " rugit!</p>";
    }
}
