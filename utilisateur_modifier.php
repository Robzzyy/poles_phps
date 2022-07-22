<?php
include "inc/init.inc.php";

$id = $_GET["id"] ?? null;

if (empty ($id))  {
    redirection("utilisateur_liste.php");
}



$requete = $connexion->query("SELECT * FROM  utilisateur WHERE id=$id");
if ($requete !== false) {
    if ($requete->rowCount() == 1) {
        $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);
       if ($_POST) {
            if( !empty($_POST["pseudo"]) && !empty($_POST["mdp"]) ){
                $pseudo = $_POST["mdp"];
                // UPDATE utilisateur SET pseudo = '$pseudo', mdp = '$mdp' WHERE id = $id;
                $texteRequete = "UPDATE utilisateur SET pseudo = '$pseudo',mdp='$mdp' WHERE id = $id";
                $resultat = $connexion->exec($texteRequete);
                if($resultat == 1 ) {
                    $messageSuccess = "Les modifications ont été enregistrées dans la base de données";

                } else {
                    $messageErreur = "Erreur lors de l'actualisation en bdd";
                }
            }
       }
    } else{
        $messageErreur = "Il n'y a pas d'utilisateur avec cet identifiant";
    }
} else {
    $messageErreur = "Erreur SQL";
}


;


include "vues/header.html.php";
include "vues/form_user.php";
include "vues/footer.html.php";