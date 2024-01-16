<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une chaine de caractère.</p><br>

        <h2>Résultat</h2>
       
        
   
       
      

<?php
// setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR@euro', 'fr_FR.utf8', 'fr-FR', 'fra'); date_default_timezone_set('Europe/Paris');

// $dates = date("2018-02-23");

// function formaterDateFr($dates){

//    $dates = date_create_from_format('Y-m-d', '2018-02-23')->format("l d F Y ");


//     return $dates;
// }
//  echo formaterDateFr($dates) ."<br>";

        function afficherDateFr($date) {
        // Convertir la chaîne de caractères en objet DateTime
        $dateObj = DateTime::createFromFormat('Y-m-d', $date);
    
        // Obtenir le jour, le mois et l'année en français
        $jour = $dateObj->format('d');
        $mois = $dateObj->format('F');
        $annee = $dateObj->format('Y');
    
        // Tableau des jours de la semaine en français
        $joursSemaine = array(
            'dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'
        );

        $moisFr = ["janvier", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
    
        // Obtenir le jour de la semaine en français
        $jourSemaine = $joursSemaine[$dateObj->format('w')];
        $moisFra = $moisFr[$dateObj->format('n')];
    
        // Retourner la date en français
        return $jourSemaine . ' ' . $jour . ' ' . $moisFra . ' ' . $annee;
    }
    
    // Exemple d'utilisation de la fonction
    $date = '2018-01-23';
    $dateFr = afficherDateFr($date);
    echo $dateFr;



?>