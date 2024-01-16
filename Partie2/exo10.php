<h1>Exercice 10</h1>

<p>En utilisant l'ensemble des fonctions personnalisées créer précédemment, créer un formulaire complet...</p><br>

        <h2>Résultat</h2>
       
        
       
      

<?php

$formulaire = ["Nom", "Prénom", "Adresse", "Ville", "Email", "Sexe"];
$genres = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];

function afficherInput($formulaire){
        $result = "<label for='nom'>";
    foreach($formulaire as $form)
    $result .= " $form : <br>
               <input type='text' name='nom'><br>";
               $result .= "</label><br>";
               return $result;
}



function afficherRadio($genres){
    $result = "<form>";
    foreach($genres as $genre){
        $result .= "<input type='radio' name='nom' value='".$genre ."'>";
        $result .= "<label for='nom'>".$genre ."</label><br>";           
        
        
    }
    $result .= "<br><input type='submit'></form>";
    
    
    return $result;
}



echo afficherInput($formulaire);
echo afficherRadio($genres);




?>