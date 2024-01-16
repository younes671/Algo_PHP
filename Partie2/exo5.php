<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.</p><br>

        <h2>Résultat</h2>
        
  
      

<?php

$formulaire = ["Nom", "Prénom", "Ville"];

function afficherInput($formulaire){
        $result = "<label for='nom'>";
    foreach($formulaire as $form)
    $result .= "  $form  <br>
               <input type='text' name='nom'><br>";
               $result .= "</label><br>";
               return $result;
}

echo afficherInput($formulaire);


?>