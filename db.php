<?php
include "functions.inc.php";
include "vues/header.html.php";
$connexion = new PDO("mysql:host=localhost;dbname=bddtest", "root" , "");
if ($_POST){
    if ( !empty($_POST["pseudo"]) && !empty($_POST["mdp"]) ) {
// insert into utilisateurs (prenom,mdp) VALUES ('dark','sombre');
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];
    $resultat = $connexion->exec("insert into utilisateur (pseudo,mdp) VALUES ('$mdp', '$pseudo')");
    if ( $resultat ==1 ) {
        $messageSucess = "Vous êtes enregistré dans la base de données";
    } else {
        $messageErreur = "Erreur lors de l'inser en bdd";
    }
    }  else {
        $messageErreur = "Veuillez remplir tous les champs obligatoires";
        }

}

//  debug($connexion);

/*
    SELECT * FROM utilisateur 
*/

$requete = $connexion->query("SELECT * FROM utilisateur");
$utilisateurs = $requete->fetchAll(PDO::FETCH_ASSOC);

 debug($utilisateurs);   

foreach($utilisateurs as $utilsateur ) {
    foreach($utilsateur as $champ => $valeur ){
        ecrire ("<strong>$champ</strong> : $valeur");
    }
    echo "<hr>";
}

include "vues/footer.html.php";

include "form_user.php";


