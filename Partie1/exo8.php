<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme :</p><br>

<h2>Résultat</h2>

<?php

$multiplicateur = 8;

echo "Table de $multiplicateur : <br>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . " * " . $multiplicateur . " = " . $i * $multiplicateur . "<br>";
}

?>