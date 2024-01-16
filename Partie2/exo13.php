<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modele, nbPorte...</p><br>

        <h2>Résultat</h2>
       
        
       
      

<?php


class Voiture {
        private string $marque;
        private string $modele;
        private int $nbPorte;
        private int $vitesseActuelle;
        private bool $statut;


        
        public function __construct(string $marque, string $modele, int $nbPorte){
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPorte = $nbPorte;
            $this->vitesseActuelle = 0;
            $this->statut = false;
        }

        public function getMarque(): string {return $this->marque;}
        public function getModele(): string {return $this->modele;}
        public function getNbPorte(): int {return $this->nbPorte;}
        public function getVitesseActuelle(): int {return $this->vitesseActuelle;}
        public function getStatut(): bool {return $this->statut;}
        public function getStatutTexte() {
                if ($this->statut){
                    echo "démarrer";
                }else{
                    echo "stopper";
                }
        }

        public function setMarque($marque){return $this->marque = $marque;}
        public function setModele($modele){return $this->modele = $modele;}
        public function setNbPorte($nbPorte){return $this->nbPorte = $nbPorte;}
        public function setVitesseActuelle($vitesseActuelle){return $this->vitesseActuelle = $vitesseActuelle;}
        public function setStatut($statut){return $this->statut = $statut;}
        

        
        public function demarrer(){
           if ($this->statut){
               echo "la voiture est déjà démarrée";
              }else{
                $this->statut = true;
                echo "La voiture $this est démarré";
              }
        }
    
        

        public function accelerer(int $vitesse){
            if($this->statut) {
                $this->vitesseActuelle += $vitesse;
                echo "La voiture accelère de $vitesse km/h";
            } else {
                echo "Pour accélerer, il faut démarrer le véhicule !";
            }
        }

        public function stopper(){
            if($this->statut) {
                echo " est déjà démarrée !";
            } else {
                $this->statut = false;
                $this->vitesseActuelle = 0;
                echo "est à l'arret";
            }
        }

        public function ralentir(int $vitesse){
            if($this->statut) {
                if ($this->vitesseActuelle > $vitesse) {
                    $this->vitesseActuelle -= $vitesse;
                    echo "La voiture ralentit de $vitesse km/h";
                }else{
                    echo "La voiture ne peut pas ralentir autant !";
                }

            } else {
                echo "La voiture ne roule pas !";
            }

        }

        public function getInfo(){
            echo "Infos véhicule <br>";
            echo "******************<br>";
            echo "Nom et modele du véhicule : " . $this . "<br>";
            echo "Nombre de portes : " . $this->getNbPorte() . "<br>";
            echo "Le véhicule " . $this . " est ";
            echo  $this->getStatutTexte() . "<br>";
            echo "Sa vitesse actuelle est de : " . $this->getVitesseActuelle() . " km / h<br><br>";
        }


            public function __toString(){
                return $this->marque . " " . $this ->modele;
            }
    
}

    $v1 = new Voiture("Peugeot", "408", 5);
    $v2 = new Voiture("BMW", "535D", 5);
    $v3 = new Voiture("Porshe", "911", 3);
    $v4 = new Voiture("Mercedes", "500SL", 3);

    echo "<br>" . $v1->demarrer();
    echo "<br>" . $v1->accelerer(50) . "<br>";
    echo "<br>" . $v1->ralentir(80) . "<br>";
    echo $v1->getInfo() . "<br>";
    echo $v2->getInfo();

?> 