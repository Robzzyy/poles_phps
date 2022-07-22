<?php
require "inc/init.inc.php";

affichage("accueil.html.php", [
    "nom_marques" => selection("nom_marque")
]);
