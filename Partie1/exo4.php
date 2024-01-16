<h1>Exercice 4</h1>

<p>Soit la phrase << Engage le jeu que je le gagne>>.<br>

      <h2>Résultat</h2>

      <?php

      $phrase = "Engage le jeu que je le gagne";
      $phrase2 = str_replace(' ', '', $phrase);
      $phrase2 = strtolower($phrase2);
      $reverse = strrev($phrase2);

      if ($phrase2 == $reverse) {
         echo "\"$phrase\" est un palindrome ";
      } else {
         echo "\"$phrase\" n'est pas un palindrome";
      }


      ?>