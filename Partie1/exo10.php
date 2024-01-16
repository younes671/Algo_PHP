<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10€ et de 5€, de pièce de 2€ et de 1€</p><br>

<h2>Résultat</h2>

<?php
$facture = 152;
$verse = 200;
$reste = $verse - $facture;
$billet10 = 10;
$billet5 = 5;
$piece2 = 2;
$piece1 = 1;
$renduBillet10 = intdiv($reste, $billet10);
$x = $reste % $billet10;
$rendubillet5 = intdiv($x, $billet5);
$y = $x % $billet5;
$rendupiece2 = intdiv($y, $piece2);
$z = $y % $piece2;
$rendupiece1 = intdiv($z, $piece1);

echo "Montant à payer : " . $facture . "<br>";
echo "Montant versé : " . $verse . "<br>";
echo "Reste à payer : " . $reste . "<br>";
echo "************************************************************<br>";
echo "Rendue de monnaie : <br>";
echo $renduBillet10 . " billets de " . $billet10 . " € - " . $rendubillet5 . " billet de  " . $billet5 . " € - " . $rendupiece2 . " pièce de " . $piece2 . " € - " . $rendupiece1 . " une pièce de " . $piece1 . " € ";

?>