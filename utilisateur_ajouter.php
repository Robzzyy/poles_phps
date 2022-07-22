<?php

include "inc/init.inc.php";
$connexion = new PDO("mysql:host=localhost;dbname=bddtest", "root" , "");
if ($_POST){
    if ( !empty($_POST["pseudo"]) && !empty($_POST["mdp"]) ) {
// insert into utilisateurs (prenom,mdp) VALUES ('dark','sombre');
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];
    $resultat = $connexion->exec("insert into utilisateur (pseudo,mdp) VALUES ('$mdp', '$pseudo')");
    if ( $resultat == 1 ) {
 
        $_SESSION["success"] = "Bravo vous êtes identifié!";
    } else {
      $_SESSION["erreur"] = "Erreur lors de l'inser en bdd";
    }
    }  else {
        $_SESSION["erreur"] = "Veuillez remplir tous les champs obligatoires";
        $pseudo = $_POST["pseudo"] ??"";
        }
        redirection("utilisateur_liste.php");
    
} 
   
    



  


include "vues/header.html.php";
include "vues/utilisateur/nouveau_html.php";
include "vues/footer.html.php";