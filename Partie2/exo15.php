<h1>Exercice 15</h1>

<p>En utilisant les ressource de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format.</p><br>

        <h2>Résultat</h2>
       

<?php
   
// email
$email = "elan@elan";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse " . $email . " est une adresse e-mail valide.";
} else {
    echo "L'adresse " . $email . " est une adresse e-mail invalide.";

}






?>