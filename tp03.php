<?php

declare(strict_types=1);

class CompteBancaire
{
  public function __construct(
    private string $numero,
    private string $titulaire,
    private int $solde = 0
  ) {}

  public function deposer(float $montant): void
  {
    if ($montant <= 0) throw new InvalidArgumentException("Montant invalide");
    $this->solde += $montant;
  }
  public function retirer(float $montant): void
  {
    if ($montant <= 0) throw new InvalidArgumentException("Montant invalide");
    if ($montant >  $this->solde) throw new InvalidArgumentException("solde insufisant");
    $this->solde -= $montant;
  }
  public function consulterSolde(): float
  {
    return $this->solde;
  }
}
