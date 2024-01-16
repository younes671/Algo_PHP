<h1>Exercice 12</h1>

<p>A l'aide d'une boucle, afficher les informations des variables contenues dans le tableau.</p><br>

        <h2>Résultat</h2>
       
        
   
       
      

<?php
$tableauValeurs = [true, "texte", 10, 25.369, ["valeur1", "valeur2"]];

foreach($tableauValeurs as $tableauValeur){
   echo  var_dump($tableauValeur) . "<br>" ;
    
}

?>