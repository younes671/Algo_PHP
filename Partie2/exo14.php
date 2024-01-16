<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu'une classe VoitureElec...</p><br>

        <h2>Résultat</h2>
       

<?php
   
  class voiture {
    protected string $marque;
    protected string $modèle;
    
  public function __construct(string $marque, string $modèle){
   $this->marque = $marque;
   $this->modèle = $modèle;
}

public function getInfos() {
   return "<br>Marque : " . $this->marque . " <br> Modèle : " . $this->modèle;
}
  }

class VoitureElec extends Voiture {
protected $autonomie;

public function __construct($marque, $modele, $autonomie) {
   parent::__construct($marque, $modele);
   $this->autonomie = $autonomie;
}

public function getInfos() {
   return parent::getInfos() . " <br> Autonomie : " . $this->autonomie . " km";
}
}


$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "i3", 100);


echo $v1->getInfos() . "<br/>";
echo $ve1->getInfos() . "<br/>";




?>