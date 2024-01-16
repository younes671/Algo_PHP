<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes...</p><br>

        <h2>Résultat</h2>
       
        
       
      

<?php


class Voiture {
        private string $marques;
        private string $modèles;
        private int $nbPortes;
        private int $vitesseActuelle;
        private bool $statut;
        private int $vitesse;


        
        public function __construct(string $marques, string $modèles, int $nbPortes, bool $statut, int $vitesse){
            $this->marques = $marques;
            $this->modèles = $modèles;
            $this->nbPortes = $nbPortes;
            $this->vitesseActuelle = 0;
            $this->statut = $statut;
            $this->vitesse = $vitesse;
        }

        public function getMarques(): string {return $this->marques;}
        public function getModèles(): string {return $this->modèles;}
        public function getNbPortes(): int {return $this->nbPortes;}
        public function getVitesseActuelle(): int {return $this->vitesseActuelle;}
        public function getStatut(): bool {return $this->statut;}
        public function getVitesse(): int {return $this->vitesse;}

        public function setMarques($marques){return $this->marques = $marques;}
        public function setModèles($modèles){return $this->modèles = $modèles;}
        public function setNbPortes($nbPortes){return $this->nbPortes = $nbPortes;}
        public function setVitesseActuelle($vitesseActuelle){return $this->vitesseActuelle = $vitesseActuelle;}
        public function setStatut($statut){return $this->statut = $statut;}
        public function setVitesse($vitesse){return $this->vitesse = $vitesse;}

        



        public function demarrer(){
                   if($this->statut == true){
                    echo "démarre";
                    }else{
                        echo "démarré";
                    }
                   }
        

        public function accelerer(){
                    switch ($this->vitesse){
                        case 20 :
                            echo " accélerer de 20 ";
                            break;
                        case 50 :
                            echo " accélère de 50 ";
                            break;
                        default : 
                            echo " n'accélère pas ";
                    }
                 
        }

        public function stopper(){
                    if ($this->statut == true){
                        echo "est à l'arret";
                    }else{
                        echo "roule";
                    }
        }

        public function ralentir(){
            switch ($this->vitesse){
                case 20 :
                    echo " ralentit de 20 ";
                    break;
                case 50 :
                    echo " ralentit de 50 ";
                    break;
                default : 
                    echo " ne ralentit pas ";
        }
    }
}

    $v1 = new Voiture("Peugeot", "408", 5, false, 50);
    $v2 = new Voiture("BMW", "535D", 5, true, 0);
    $v3 = new Voiture("Porshe", "911", 3, true, 0);
    $v4 = new Voiture("Mercedes", "500SL", 3, true, 0);

    $v1->setVitesseActuelle(50);

    echo "Infos véhicule 1<br>";
    echo "******************<br>";
    echo "Nom et modèle du véhicule : " . $v1->getMarques() . " " . $v1->getModèles() . "<br>";
    echo "Nombre de portes : " . $v1->getNbPortes() . "<br>";
    echo "Le véhicule " . $v1->getMarques() . " est ";
    echo  $v1->demarrer() . "<br>";
    echo "Sa vitesse actuelle est de : " . $v1->getVitesseActuelle() . " km / h<br><br>";

    echo "Infos véhicule 2<br>";
    echo "******************<br>";
    echo "Nom et modèle du véhicule : " . $v2->getMarques() . " " . $v2->getModèles() . "<br>";
    echo "Nombre de portes : " . $v2->getNbPortes() . "<br>";
    echo "Le véhicule " . $v2->getMarques() ." ";
    echo  $v2->stopper() . "<br>";
    echo "Sa vitesse actuelle est de : " . $v2->getVitesseActuelle() . " km / h<br><br>";

    $v1->setVitesseActuelle("0");
    $v1->setStatut(true);
    $v2->setVitesse(20);
    
    
    echo "Le véhicule " . $v1->getMarques() . " " . $v1->getModèles() . " ";
    echo $v1->demarrer() . "<br>";
    echo "Le véhicule " . $v1->getMarques() . " " . $v1->getModèles() . " ";
    echo $v1->accelerer() ." km / h <br>";
    echo "Le véhicule " . $v2->getMarques() . " " . $v2->getModèles() . " ";
    echo $v1->demarrer() . "<br>";
    echo "Le véhicule " . $v2->getMarques() ." ";
    echo  $v2->stopper() . "<br>";
    echo "Le véhicule " . $v2->getMarques() . " " . $v2->getModèles() . " veut ";
    echo $v2->accelerer() . " <br>";
    echo "Pour ";
    echo $v2->accelerer() . ", il faut démarrer le véhicule " . $v2->getMarques() . " " . $v2->getModèles() . " !<br>";

    $v1->setVitesseActuelle("50");

    echo "La vitesse du véhicule " . $v1->getMarques() . " " . $v1->getModèles() . " est de " . $v1->getVitesseActuelle() . " km / h <br>";
    echo "La vitesse du véhicule " . $v2->getMarques() . " " . $v2->getModèles() . " est de " . $v2->getVitesseActuelle() . " km / h <br>";





?> 