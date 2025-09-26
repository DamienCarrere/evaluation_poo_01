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
        echo "<p><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>></p>";
        echo "<p>Une livraison de " . count($this->animaux) . " animaux à été effectuée.</p>";
        echo "<p><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>></p>";
    }

    public function addVisiteur(Visiteur $visiteur)
    {
        $this->visiteurs[] = $visiteur;
        // echo "<p>Billet vendu à " . $visiteur->getName() . "</p>";
    }

    public function vendreBillet(array $visiteurs)
    {
        foreach ($visiteurs as $visiteur) {
            if ($visiteur->hasTicket() === true) {
                $this->addVisiteur($visiteur);
                echo "<p>Billet vendu à " . $visiteur->getName() . "</p>";
            } else {
                echo "<p>Pas de billet pour {$visiteur->getName()}, donc pas de zoo, t'es puni!</p>";
            }
        }
        echo "<p><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>></p>";
    }

    public function nouvelleNaissance(Animal $animal)
    {
        $baby = $animal->donnerNaissance();
        $this->addAnimal($baby);
        return $baby;
    }
    public function ouvrirLesPortes()
    {
        $milieuVisiteurs = round(count($this->visiteurs) / 2);
        $contraceptionForcée = false;

        foreach ($this->visiteurs as $i => $visiteur) {
            echo "<p><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>></p>";
            echo "<p>Visite de " . $visiteur->getName() . "</p>";
            echo "<p><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>><<>></p>";
            foreach ($this->animaux as $animal) {

                $animal->faireLeShow();
            }

            if ($i == $milieuVisiteurs && $contraceptionForcée === false) {
                $baby = $this->nouvelleNaissance($this->animaux[1]);
                $contraceptionForcée = true;
                echo "<p>-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-<p>";
                echo "<p>Naissance de  " . $baby->getName() . "</p>";
                echo "<p>-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-</p>";
            }
        }
        $baby = $this->nouvelleNaissance($this->animaux[0]);
        echo "<p>-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-<p>";
        echo "<p>Naissance de  " . $baby->getName() . "</p>";
        echo "<p>-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-=/><\=-</p>";
    }
}
