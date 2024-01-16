<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra etre affichée avec 2 décimales.<br>

<h2>Résultat</h2>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNote = count($notes);
$totalNotes = array_sum($notes);
$moyenneGenerale = $totalNotes / $nbNote;

echo "Les notes obtenues par l'élève sont :";
foreach ($notes as $note) {
    echo  $note . " ";
}

echo "<br> Sa moyenne générale est donc de : " . number_format($moyenneGenerale, 2, ',', '');


?>