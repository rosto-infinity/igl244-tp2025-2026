<?php
declare(strict_types=1);

class Livre {
    public function __construct(
        private string $isbn,
        private string $titre,
        private int $auteur,
        private int $anneePublication,
        private bool $disponible= true,
    ) {}

    public function emprunter(): void {
        if(!$this->disponible) throw new Exception('Livre déjà emprunté');
        $this->disponible = false;
    }
}