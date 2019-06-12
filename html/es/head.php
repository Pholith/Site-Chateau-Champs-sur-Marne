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
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="site web culturel en partenariat avec le MCN sur le château de champs-sur-marne servant à valoir le patrimoine">
    <meta name="Keywords" content="mcn, culturel, château, champs-sur-marne, patrimoine, tourisme, histoire, arts, architecture">
    <meta name="Subject" content="Château de champs-sur-marne">
    <meta name="Identifier-Url" content="etudiant.u-pem.fr/~vbuisset/">
    <meta name="Revisit-After" content="3 days">
    <meta name="Robots" content="all">
    <meta name="Rating" content="general">
    <meta name="Distribution" content="global">
    <meta name="Geography" content="Île-de-France">
    <meta name="Category" content="travel">
    <meta name="DC.Title" content="Château de Champs-sur-Marne">
    <meta name="DC.Content-Type" content="UTF-8">
    <meta name="DC.Content-Language" content="fr">
    <meta name="DC.Description" content="site web culturel en partenariat avec le MCN sur le château de champs-sur-marne servant à valoir le patrimoine">
    <meta name="DC.Keywords" content="mcn, culturel, château, champs-sur-marne, patrimoine, tourisme, histoire, arts, architecture">
    <meta name="DC.Subject" content="Château de champs-sur-marne">
    <meta name="DC.Identifier-Url" content="etudiant.u-pem.fr/~vbuisset/">


</head>
