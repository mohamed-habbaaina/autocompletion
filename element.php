<?php
if (isset($_GET['id'])):
    $id = $_GET['id'];

    //  La connexion DB
    try{
    $db = new PDO("mysql:host=localhost;dbname=autocompletion", "root", "");
    }
    catch(PDOException $e){
        echo 'ERROR CONNECTION: ' . $e->getMessage();
    }

    //    ?connexion Plesk
    //  $servername = "localhost";
    //  $database = "mohamed-habbaaina_autocompletion";
    //  $username = "modul_connexion";
    //  $password = "autocompletion1";
     
    //  try {
    //    $db = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
       // set the PDO error mode to exception
    //    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  } catch(PDOException $e) {
    //    echo "Connection failed: " . $e->getMessage();
    //  }

    //  Query where "id"

            /*
         ! pour la db : "changement du nom de la table sans accents" avant "RHÔNE" après "Rhone"

             $req = $db->prepare("SELECT * FROM `plages_Bouches-du-Rhone` WHERE id=?");
        */

    $req = $db->prepare("SELECT * FROM `plages_Bouches-du-RHÔNE` WHERE id=?");
    $req->execute(["$id"]);
    $data = $req->fetchAll(PDO::FETCH_ASSOC);   //  Récupérer la data dans BD.
    $nom = $data[0]['nom']; //   id
    $adresse = $data[0]['adresse']; //  "adresse"
    $lien = $data[0]['lien'];       //  "lien"
else:           //  redirection vers index.php pour géré les erreurs
    header('location: index.php');
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/element.css">
    <title>Element</title>
</head>
<body>
    <header>
        <button><a href="./index.php">Home</a></button>
    </header>
    <main>
        <div >
            <h3>Affichage des informations :</h3>
            <table>
                <thead>
                    <tr>
                        <th>Plage</th>
                        <th>Adresse</th>
                        <th>Lien pour plus d'info</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?=$nom ?></td>
                        <td><?=$adresse ?></td>
                        <td><a href="<?=$lien ?>"><?=$lien ?></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>