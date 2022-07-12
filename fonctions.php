<?php

/*  PORTEE DES VARIABLES (=scope) 
La portée d'une variable correspond à l'endroit du code
où cette variable est accessible.
Dans la déclaration d'une fonction, on ne peut utiliser que les var qui sont
déclarées dans cette fonction, ou qui sont passées dans les arguments de la fonction.
une variable déclarée dans une fonction, n'est accesible que dans cette fonction.
 */

include "functions.inc.php";
echo $aujourdhui . "<br>";
$variableGlobale = 32;
define("PI",3.14);

function salutation($prenomAsaluer){
    return "Bonjour $prenomAsaluer";
    echo "Cette phrase ne sera jamais affichée !";
}



function addition($nombre1, $nombre2){
    // var_dump($_GET);
    /*  On peut utiliser une var qui n'a pas été déclarée dans une
    fonction que si on utilise le mot clé 'global'. Il faut ajouter l'instruction
    suivante : global $nomDeLaVariable;  */
    global $variableGlobale;
    $some = $nombre1 + $nombre2 + $variableGlobale + PI;
    return $some;
}


$some = addition(7,12);
 echo "Le resultat de l'addition de 7+12 = " .  addition(7,12) . "</br>";
echo "La valeur de pi est" . PI . "<br>";





// function ecrire($texte){
//     echo "$texte<br>";
// }


$prenom = "Pierre";
// echo "Bonjour $prenom";
echo salutation($prenom);

echo "<hr>";

$prenom = "Gertrude";
echo salutation($prenom, ", comment allez-vous ?");
// echo ", comment allez-vous ?";

// echo "Bonjour $prenom, comment allez-vous ?"; 

echo "<hr>";

// $prenom = "Sandro";
// echo "Bonjour $prenom<br>";
ecrire(salutation("Sandro<br>"));

// salutation();

ecrire("Bienvenue au cours de php");
ecrire("Vive le Pole S");

ecrire("Il est 9h " . salutation("à tous"));

debug($prenom);