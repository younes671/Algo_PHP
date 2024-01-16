<h1>Exercice 8</h1>

<p>Soit l'URL : ... Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.</p><br>

        <h2>Résultat</h2>
       
        
       
      

<?php

$url = 'http://my.mobirise.com/data/userpic/764.jpg';


// fonction repeterImage
 function repeterImage($url){
           $result = "<img src='$url' alt='image'/>";
           return str_repeat($result, 4);
}

echo repeterImage($url);
?>