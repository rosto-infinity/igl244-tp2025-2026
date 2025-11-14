<?php
declare(strict_types=1);

class Personne{
  public function __construct(
    private string $nom,
    private string $prenom,
    private int $age,
    private string $email,
  ){
    $this->setAge($age);
    $this->setEmail($email);
  }
    public function getNom(): string { return $this->nom; }
    public function setNom(string $nom): void { $this->nom = $nom; }

    public function getPrenom(): string { return $this->prenom; }
    public function setPrenom(string $prenom): void { $this->prenom = $prenom; }

    public function getAge(): int { return $this->age; }
    public function setAge(int $age): void {
        if ($age < 0) throw new InvalidArgumentException("L'âge doit être positif");
        $this->age = $age;
    }

    public function getEmail(): string { return $this->email; }
    public function setEmail(string $email): void {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Email invalide");
        }
        $this->email = $email;
    }

    public function sePresenter() {
    echo "Je m'appelle {$this->prenom} {$this->nom} et j'ai {$this->age} ans.";
}


}
$personne1 = new Personne("Myra","Eva", 30,"myraeva@gmail.com");
$personne1->sePresenter();