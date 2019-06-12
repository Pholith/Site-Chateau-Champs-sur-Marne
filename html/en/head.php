<?php 
include("../../phpFiles/head.php");
?>

<head>    
    <meta name="viewport" content="width=device-width; initial-scale=0.7;">	<meta charset="utf-8">
    <?php
    if (isset($_SESSION["color"]) && $_SESSION["color"] == 2) {
               print('
            <link href="../../style/colorStyle2.css" rel="stylesheet">
            ');

    } else {
        print('
            <link href="../../style/colorStyle1.css" rel="stylesheet">
            ');
    }
    ?>
	<link href="../../style/styleMain.css" rel="stylesheet"> <!--Balise qui chareg le CSS -->
	<link rel="shortcut icon" type="image/png" href="../../image/logo/icon.png" /> <!--Balise qui charge l'icone du site -->

    <title>Château de Champs-sur-Marne</title>
    <!-- Balise de référencement -->
    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="en">
    <meta name="Description" content="cultural web site in partnership with the MCN on the Champs-sur-Marne castle , which is used to promote the heritage">
    <meta name="Keywords" content="mcn, cultural, Castle, champs-sur-marne, heritage, tourisme, history, species, architecture">
    <meta name="Subject" content="Champs-sur-Marne castle ">
    <meta name="Identifier-Url" content="etudiant.u-pem.fr/~vbuisset/">
    <meta name="Revisit-After" content="3 days">
    <meta name="Robots" content="all">
    <meta name="Rating" content="general">
    <meta name="Distribution" content="global">
    <meta name="Geography" content="Île-de-France">
    <meta name="Category" content="travel">
    <meta name="DC.Title" content="Champs-sur-Marne castle ">
    <meta name="DC.Content-Type" content="UTF-8">
    <meta name="DC.Content-Language" content="en">
    <meta name="DC.Description" content="cultural web site in partnership with the MCN on the Champs-sur-Marne castle , which is used to promote the heritage">
    <meta name="DC.Keywords" content="mcn, cultural, Castle, champs-sur-marne, heritage, tourisme, history, species, architecture">
    <meta name="DC.Subject" content="Château de champs-sur-marne">
    <meta name="DC.Identifier-Url" content="etudiant.u-pem.fr/~vbuisset/">

</head>
