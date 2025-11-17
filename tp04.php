<?php
declare(strict_types=1);

class Vehicule {
    public function __construct(
        protected string $marque,
        protected string $modele,
        protected int $annee
    ) {}

    public function afficherDetails(): void {
        echo "Marque : {$this->marque}, Modèle : {$this->modele}, Année : {$this->annee}\n";
    }
}

class Voiture extends Vehicule {
    public function __construct(
        string $marque,
        string $modele,
        int $annee,
        private int $nombrePortes
    ) {
        parent::__construct($marque, $modele, $annee);
    }

    public function afficherDetails(): void {
        parent::afficherDetails();
        echo "Nombre de portes : {$this->nombrePortes}\n";
    }
}

class Moto extends Vehicule {
    public function __construct(
        string $marque,
        string $modele,
        int $annee,
        private string $typeMoteur
    ) {
        parent::__construct($marque, $modele, $annee);
    }

    public function afficherDetails(): void {
        parent::afficherDetails();
        echo "Type de moteur : {$this->typeMoteur}\n";
    }
}