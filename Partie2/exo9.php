<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de valeurs en paramètre</p><br>

        <h2>Résultat</h2>
       
        
       
      

<?php

$genres = ["Masculin", "Féminin", "Autre"];

function afficherRadio($genres){
    $result = "<form>";
    foreach($genres as $genre){
        $result .= "<input type='radio' name='nom' value='".$genre ."'>";
        $result .= "<label for='nom'>".$genre ."</label><br>";           


    }
    $result .= "<input type='submit'></form>";

             
               return $result;
}

echo afficherRadio($genres);

?>