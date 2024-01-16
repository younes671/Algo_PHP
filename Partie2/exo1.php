<h1>Exercice 1</h1>

<p>Créer une fonction personalisée convertirMajRouge () permettant de transformer une chaine de caractère passée en argument en majuscules et en rouge.<br>

        <h2>Résultat</h2>

        <style>
            .red {
                color : red;
            }
        </style>

        <?php

        $texte = "Mon texte en paramètre";

        function convertirMajRouge($texte){
           $result = mb_strtoupper($texte);
          $result = "<p class='red'>" . $result . "</p>";
            return $result;

        }

        echo convertirMajRouge($texte);
        ?>