<?php
// phpinfo();

include "inc/init.inc.php";
debug($_SERVER);

if(!empty($id = $_GET["id"] ?? null) ) {
    try {
        $requete = $connexion->query("SELECT * FROM  utilisateur WHERE id=$id");
       if ($requete) {
        if ($requete->rowCount() == 1) {
            $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $resultat = $connexion->exec("DELETE FROM utilisateur WHERE id = $id");
                if ($resultat){
                    $_SESSION["success"] = "L'utilisateur n¤$id a été supprimée!";
                } else {
                    $_SESSION["erreur"] = "Erreur lors de la suppresion de l'utilisateur n¤$id";
                }
                redirection("utilisateur_liste.php");
            }
        } else{
            $_SESSION["erreur"] = "Il n'y a pas d'use avec cet id";
            
        } 
    
    }
    else {
       $_SESSION["erreur"]= "Erreur SQL";
    }} catch (PDOException $th) {
        $messageErreur = $th->getMessage();
    //    echo $th->getMessage();
    }
    
 
}



if (!isset($utilisateur) ) {
    redirection("utilisateur_liste.php");
}




// AFFICHAGE
include "vues/header.html.php";
include "vues/utilisateur/confirmation.html.php";
include "vues/footer.html.php";