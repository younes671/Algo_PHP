<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cohée ou non.</p><br>

        <h2>Résultat</h2>
       
        
       
      

<?php

$fruits = [
     "pommes" => "choix 1",
     "poires" => "choix 2",
     "kiwi" => "choix 3"
];

function genererChekbox($fruits){
    $result = "<form>";
           foreach($fruits as $fruit){
            $result .= "<br>". $fruit . "<input type='checkbox' name=' . $fruit . ' />";
           } 
           $result .= "</form>"; 
           return $result;
}



echo genererChekbox($fruits);

?>