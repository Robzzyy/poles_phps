<?php

/* 
Pour récupérer les données envoyées d'un formulaire, on utilise une variable
déclarer par PHP : $_GET
Cette variable est dite SUPERGLOBALE. Les variables SUPERGLOBALES sont des 
variables définies dans PHP, accessibles partout.
Elles sont toujours nommées $_ suivi du nom en majuscules.
Elles sont toutes de type array.
Elles ont toutes un rôle défini
    $_GET       : contient les données passées dans l'URL ou dans un formulaire en méthode GET
    $_POST      : contient les données passées dans un formulaire en méthode POST

    $_SESSION   : contient les informations stockées dans la session utilisateur
    $_SERVER    : contient des informations sur le serveur sur lequel se trouve le site php
    $_COOKIE    : contient les cookies
    $_FILES     : contient les informations des fichiers uploadés dans un formulaire

*/

include "inc/functions.inc.php";

debug($_GET);
debug($_POST);

// EXO afficher "La valeur tapée dans le formulaire est ..."

//  echo"La valeur tapée dans le formulaire est :" . $_GET["nombre"];


 echo " Affichez toute les valeurs du formulaire : " . $_GET['nombre'];
 echo " Affichez toute les valeurs du formulaire : " . $_GET['nombre2'];
 $resultat = $_GET["nombre"] + $_GET["nombre2"];
echo "Affichez la somme des 2 : " . $resultat;
echo "La somme des 2 nombres est égale à" . ($_GET['nombre'] + $_GET['nombre2']) . "<br>";


foreach($_GET as $indice => $valeur) {
    echo "$indice = $valeur <br>";
}



// echo  $result = operation($_GET["nombre"] , $_GET["nombre2"]);

echo "resultat de 1 et 2 :" . operation($_GET['nombre'],$_GET['nombre2'],$_GET['operateur']);
echo "<br>";

 echo  "<a href='formulaire.php' class='btn btn-primary'>Calculatrice</a>";