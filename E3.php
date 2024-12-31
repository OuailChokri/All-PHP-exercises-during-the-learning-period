<?php

class Personne {
    public $nom;
    public $prenom;
    public $adresse;
    public $date_naissance;

    public function __construct($nom, $prenom, $adresse, $date_naissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->date_naissance = $date_naissance;
    }

    public function presenter() {
        return "Je m'appelle {$this->prenom} {$this->nom}, j'habite à {$this->adresse}.";
    }

    public function age() {
        $aujourdhui = new DateTime();
        $date_naissance = DateTime::createFromFormat('Y-m-d', $this->date_naissance);
        $diff = $date_naissance->diff($aujourdhui);
        return $diff->y;
    }
}

// Programme de test
$personne1 = new Personne("Dupont", "Alice", "Paris", "1990-05-12");
$personne2 = new Personne("Martin", "Jean", "Lyon", "1985-08-25");

echo $personne1->presenter() . "\n";
echo "Âge de {$personne1->prenom}: " . $personne1->age() . "\n";
echo $personne2->presenter() . "\n";
echo "Âge de {$personne2->prenom}: " . $personne2->age() . "\n";
?>
