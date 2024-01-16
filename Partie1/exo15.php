<h1>Exercice 15</h1>

    <p>Créer une classe Personne (nom,prénom et date de naissance).
        Instancier 2 personnes et afficher leurs informations : nom, prénom et age.<br>
    
    <h2>Résultat</h2>

    <?php
    // classe Personne
         class Personne {
            public string $nom;
            public string $prenom;
            public DateTime $dateNaissance;
         

         public function __construct(string $nom, string $prenom, string $dateNaissance) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->dateNaissance = new DateTime($dateNaissance);
         }

         public function getNom(): string {return $this->nom;}
         public function getPrenom(): string {return $this->prenom;}
         public function getDateNaissanse(): DateTime {return $this->dateNaissance;}

         public function setNom($nom): string {return $this->nom = $nom;}
         public function setPrenom($prenom): string {return $this->prenom = $prenom;}
         public function setDateNaissanse($dateNaissance): string {return $this->dateNaissance =$dateNaissance;}


         public function calculerAge() {
            $dateActuelle = new DateTime();
            $age = $this->dateNaissance->diff($dateActuelle);
            return $age->y;
         }

         public function __toString() {
            return  $this->prenom . " " . $this->nom . " a  " . $this->calculerAge() . " ans" . "<br>";
         }
      } 

        $p1 = new Personne("DUPONT", "Michel", "1980-02-19");
        $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

        echo  $p1;
        echo  $p2;
    ?> 