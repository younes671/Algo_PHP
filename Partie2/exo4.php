<h1>Exercice 4 </h1>

<p>A partir de l'exercice 2, ajouter une colonne suplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia...</p><br>

        <h2>Résultat</h2>
        
  
      

<?php

$capitales = [
    "Allemagne" => "berlin",
    "France" => "paris",
    "Italie" => "Rome",
    "USA" => "washington",
];

ksort($capitales);



function afficherTableHtml($capitales){
   $result = "<table border='1px'>
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
            <th>Lien Wiki</th>
        </tr>
    </thead>
    <tbody>";
    foreach ($capitales as $pays => $capitale){
    $urlWiki = "https://fr.wikipedia.org/wiki/" . $capitale;
    $result .= "<tr>
                  <td>" . mb_strtoupper ($pays) . "</td>
                  <td>" . ucfirst($capitale) . "</td>
                  <td><a href='$urlWiki' target='_blank'>LIEN</a></td> 
                </tr>";
            }
    $result .= "</tbody></table>";        
   
    return $result;
}

        


echo afficherTableHtml($capitales);
sort($capitales);

?>