<h1>Exercice 2</h1>

<p>Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom du pays) grace à une fonction personnalisée.</p><br>

        <h2>Résultat</h2>
        
      <table class='table' border="1px">
        <thead>
            <th>Pays</th>
            <th>Capitale</th>
        </thead>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Italie</td>
            <td>Rome</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
        </table>
        
      

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
                </tr>
            </thead>
            <tbody>";
            foreach ($capitales as $pays => $capitale){
            $result .= "<tr>
                          <td>" . mb_strtoupper($pays). "</td>
                          <td>" . ucfirst($capitale) . "</td>
                        </tr>";
                    }
            $result .= "</tbody></table>";        
           
            return $result;
        }
       
                

        
        echo afficherTableHtml($capitales);

        
        ?>