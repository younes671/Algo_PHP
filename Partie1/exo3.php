<h1>Exercice 3</h1>

<p>Soit la phrase << Notre formation DL commence aujourd'hui>>.<br>

        <h2>Résultat</h2>

        <?php

        $phrase = "Notre formation DL commence aujourd'hui";

        echo $phrase . "<br>";
        echo str_replace("aujourd'hui", "demain", $phrase);

        ?>