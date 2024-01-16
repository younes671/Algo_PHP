<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    Attention, la valeur générée devra etre arrondie à 2 décimales.<br>

<h2>Résultat</h2>

<?php

$montantFrancs = 100;
$tauxChange = 6.55957;
$montantEuros = $montantFrancs / $tauxChange;
$montantEuros = number_format($montantEuros, 2, ',', '');

echo "Montant en francs : " . $montantFrancs . "<br>";
echo $montantFrancs . " francs = " . $montantEuros . "€";
?>