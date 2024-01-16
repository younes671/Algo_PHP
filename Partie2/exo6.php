<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p><br>

        <h2>Résultat</h2>
       
        
       
      

<?php

$listes = [
    "Monsieur",
    "Madame",
"Mademoiselle"];

function alimenterListeDeroulante($listes){
    $result = "<select name='liste'>";
    foreach($listes as $liste){
        $result .= '
            <option value="'. $liste.'">' . $liste . '</option>';
            
        
    } 
    $result.= '</select>';
    
    return $result;
    
}


echo alimenterListeDeroulante($listes);

?>