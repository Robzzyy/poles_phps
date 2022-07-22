<?php 
include "inc/init.inc.php";
/* Afficher les utilisateurs sous forme de table HTML avec des entêtes de colonne: 
    ID,Pseudo,Mdp

*/


$requete = $connexion->query("SELECT * FROM utilisateur");

$liste = $requete->fetchAll(PDO::FETCH_ASSOC);

include "vues/header.html.php";
include "vues/utilisateur/liste.html.php";
include "vues/footer.html.php";





// UPDATE utilisateur SET pseudo="dev" WHERE id=2;