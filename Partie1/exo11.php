<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d'en afficher le contenu ( une marque de voiture par ligne). Il est également demandé d'afficher le nombre de marques de voitures présentes dans le tableau.

</p><br>

<h2>Résultat</h2>

<?php

$marques = ["Volkswagen", "Ferrari", "BMW", "Mercedes", "Bugatti"];
$nbMarques = count($marques);
echo "<p>Il y a " . $nbMarques . " marques de voitures dans le tableau :</p>";

echo "<ul>";
foreach ($marques as $marque) {
    echo "<li><b>" . $marque . "</b></li>";
}
echo "</ul>";

?>