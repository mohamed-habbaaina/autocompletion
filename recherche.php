<?php
if (isset($_GET['search'])):
    $requ = $_GET['search'];

        //  La connexion DB
    try{

        $db = new PDO("mysql:host=localhost;dbname=autocompletion", "root", "");
    }
    catch(PDOException $e){
        echo 'ERROR CONNECTION: ' . $e->getMessage();
    }

    //   ?connexion Plesk
    // $servername = "localhost";
    // $database = "mohamed-habbaaina_autocompletion";
    // $username = "modul_connexion";
    // $password = "autocompletion1";
    
    // try {
    //   $db = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
         // set the PDO error mode to exception
    //   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch(PDOException $e) {
    //   echo "Connection failed: " . $e->getMessage();
    // }

        /*
         ! pour la db : "changement du nom de la table sans accents" avant "RHÔNE" après "Rhone"

             $req = $db->prepare("SELECT * FROM `plages_Bouches-du-Rhone` WHERE nom LIKE '%{$requ}%'");
        */

    $req = $db->prepare("SELECT * FROM `plages_Bouches-du-RHÔNE` WHERE nom LIKE '%{$requ}%'");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_ASSOC);
    $data_JSON = json_encode($data);
    echo $data_JSON;
endif;