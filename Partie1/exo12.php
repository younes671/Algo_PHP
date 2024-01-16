<h1>Exercice 12</h1>

    <p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée (tableau contenant clé valeur), dire bonjour aux différentes personnes dans leur langue respective.</p><br>
    
    <h2>Résultat</h2>

    <?php
    
    $prenoms = [
        "Mickael" => "Français",
        "Virgile" => "Espagnol",
        "Marie-Claire" => "Anglais"
    ];
      ksort($prenoms);
    
    foreach ($prenoms as $prenom => $langue) {
        switch ($langue) {
            case "Français":
                echo "Salut " . $prenom . " ! <br>";
                break;
            case "Espagnol":
                echo "Hola " . $prenom . " ! <br>";
                break;
            case "Anglais":
                echo "Hello " . $prenom . " ! <br>";
                break;
            default:
                echo "Cette langue n'est pas prise en charge";
                break;
        }
    }
    
    
    ?>