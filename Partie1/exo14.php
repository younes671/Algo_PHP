<h1>Exercice 14</h1>

<p>Calculer l'age exact d'une personne à partir de sa date de naissance (en année, mois, jours).<br>

<h2>Résultat</h2>

<?php
$dateDeNaissance = "17-09-1985";

$date = date("d-m-Y");
$age = date_diff(date_create($dateDeNaissance), date_create($date));

echo "Si la date courante est le " . $date . " et la date de naissance le " . $dateDeNaissance . " : <br> Alors l'age de la personne est : " . $age->format("%y ans %m mois %d jours");

?>