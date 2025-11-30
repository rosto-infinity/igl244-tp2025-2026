<?php
// #### **TP 5 : Redéfinition de méthode**

public function demarrer(): void {
    echo "Le véhicule démarre.\n";
}

// Dans Voiture :
public function demarrer(): void {
    echo "La voiture démarre avec {$this->nombrePortes} portes.\n";
}

// Dans Moto :
public function demarrer(): void {
    echo "La );moto démarre avec un moteur {$this->typeMoteur}.\n";
}