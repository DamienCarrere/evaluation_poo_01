<?php

class Zoo
{

    protected array $animaux = [];
    protected array $visiteurs = [];


    public function addAnimal(Animal $animal)
    {
        $this->animaux[] = $animal;
    }

    public function livraison(array $animaux)
    {
        foreach ($animaux as $animal) {
            $this->addAnimal($animal);
        }
        echo "Une livraison de " . count($this->animaux) . " animaux à été effectuée.";
    }

    public function vendreBillet(array $visiteurs) {}
}
