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
    $req = $db->prepare("SELECT * FROM `plages_Bouches-du-RHÔNE` WHERE nom LIKE '%{$requ}%'");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_ASSOC);
    $data_JSON = json_encode($data);
    echo $data_JSON;
endif;