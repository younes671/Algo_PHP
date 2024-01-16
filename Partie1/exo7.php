<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son age.</p><br>

<h2>Résultat</h2>

<?php

$ageEnfant = 10;
$categorie = null;

if ($ageEnfant == 6 || $ageEnfant == 7) {
   $categorie = "Poussin";
} elseif ($ageEnfant == 8 || $ageEnfant == 9) {
   $categorie = "Pupille";
} elseif ($ageEnfant == 10 || $ageEnfant == 11) {
   $categorie = "Minime";
} elseif ($ageEnfant >= 12) {
   $categorie = "Cadet";
}
// else {
//    echo "L'enfant ne correspond à aucune catégorie";
// }

// switch ($ageEnfant) {
//    case 6:
//    case 7:
//       $categorie = "Poussin";
//       break;

//    case 8:
//    case 9:
//       $categorie = "Pupille";
//       break;

//    default:
//       break;
// }

// si la catégorie est reconnue
if ($categorie) {
   echo "L'enfant qui a $ageEnfant ans appartient à la catégorie << $categorie >><br>";
} else {
   echo "L'enfant qui a $ageEnfant ans ne correspond à aucune catégorie";
}

?>