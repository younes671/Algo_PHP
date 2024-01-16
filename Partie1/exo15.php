<h1>Exercice 15</h1>

    <p>Créer une classe Personne (nom,prénom et date de naissance).
        Instancier 2 personnes et afficher leurs informations : nom, prénom et age.<br>
    
    <h2>Résultat</h2>

    <?php
         class Personne {
            public string $nom;
            public string $prenom;
            public string $dateNaissance;
         

         public function __construct(string $nom, string $prenom, string $dateNaissance) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->dateNaissance = $dateNaissance;
         }

         public function getNom(): string {return $this->nom;}
         public function getPrenom(): string {return $this->prenom;}
         public function getDateNaissanse(): string {return $this->dateNaissance;}

         public function setNom($nom): string {return $this->nom = $nom;}
         public function setPrenom($prenom): string {return $this->prenom = $prenom;}
         public function setDateNaissanse($dateNaissance): string {return $this->dateNaissance =$dateNaissance;}


         public function calculerAge() {
            $dateActuelle = new DateTime();
            $dateNaissance = new DateTime($this->dateNaissance);
            $age = $dateActuelle->diff($dateNaissance);
            return $age->y;
         }
        } 

        $p1 = new Personne("DUPONT", "Michel", "1980-02-19");
        $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

        echo  $p1->prenom . " " . $p1->nom . " a  " . $p1->calculerAge() . " ans" . "<br>";
        echo  $p2->prenom . " " . $p2->nom . " a  " . $p2->calculerAge() . " ans";
    ?> 