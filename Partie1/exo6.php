<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à regler à partir de la quantité d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20% -> 0.2)<br>

<h2>Résultat</h2>

<?php

$prixUnitArt = 9.99;
$quantite = 5;
$tauxTVA = 0.2;
$prixHT = $prixUnitArt * $quantite;
$TVA = $prixHT * $tauxTVA;
$prixTTC = $prixHT + $TVA;

echo "Prix unitaire de l'article : " . $prixUnitArt . "€ <br>";
echo "Quantité : " . $quantite . "<br>";
echo "Taux de TVA : $tauxTVA (" . ($tauxTVA * 100) . "%)<br>";
echo "Le montant de la facture à régler est de : " . $prixTTC . " € ";
?>