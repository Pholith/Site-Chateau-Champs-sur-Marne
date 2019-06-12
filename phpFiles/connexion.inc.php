<?php 
    include("parametre.inc.php");

    try{
        $con='mysql:host='.$host.';dbname='.$db;

        $bd = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
        $bd->exec('SET NAMES utf8');

        }
    catch (Exception $e){
        print('Connexion impossible à la base de données ! '."\n".$e->getMessage());
    }

 ?> 