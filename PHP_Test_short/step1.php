<?php

// getters and setters are created manually
class Utilisateur {
    private $nom;
    private $email;

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}

$utilisateur = new Utilisateur();
$utilisateur->setNom("John Doe");
$nom = $utilisateur->getNom();
echo "manual getters and setters : ".$nom;
echo "\n";

// using automatic getters and setters
class Utilisateur2 {
    private $nom;
    private $email;

    public function __get($propriete) {
        if (property_exists($this, $propriete)) {
            return $this->$propriete;
        } else {
            throw new Exception("Propriété invalide : $propriete");
        }
    }

    public function __set($propriete, $valeur) {
        if (property_exists($this, $propriete)) {
            $this->$propriete = $valeur;
        } else {
            throw new Exception("Propriété invalide : $propriete");
        }
    }
}

$utilisateur2 = new Utilisateur2();
$utilisateur2->nom = "John2 Doe2";
echo "automatic getters and setters : ".$utilisateur2->nom;

