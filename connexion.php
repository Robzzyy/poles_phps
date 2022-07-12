
<?php
/*
OPERATEUR TERNAIRE : 
        condition ? valeur_si_vraie : valeur_si_fausse

l'operateur ternaire permet d'avoir une expression dont la valeur depend d'une condition.
Si la condition est vraie, la valeur se trouve après le ?
Si la condition est fausse, la valeur se trouve apres les :

*/


include "vues/header.html.php";
if( !empty($_POST) ) {
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];

    if( !empty($pseudo) && !empty($mdp) ){
        if($pseudo == "admin" && $mdp == "admin"){
            $messageSuccess = "Vous êtes connecté";
        } else {
            $messageErreur = "Le pseudo ou le mot de passe sont incorrects";
        }
    } else {
        $messageErreur = "Veuillez renseigner le pseudo et le mot de passe, svp";
    }
}
?>
<?php if ( isset ($messageSuccess) ): ?>
<div class="alert alert-success"><?php echo $messageSuccess; ?></div>
<?php endif; ?>
<div class="alert alert-danger" ><?= isset($messageErreur) ? $messageErreur : "" ?></div>


<form action="" method="post">
    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" class="form-control">
    </div>
    <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" class="form-control">
    </div>

    <div class="d-flex">
        <button type="submit" class="btn btn-primary mr-2">Se connecter</button>
        <button type="reset" class="btn btn-danger">Annuler</button>
    </div>
</form>

<?php
include "vues/footer.html.php";


///////////////////////////////////////////////////////////////////////////////////////////////////////


// div.form-group>label+input:t#pseudo.form-control
// echo "<br><a class='btn btn-primary' href='formulaire.php'>Calculatrice</a>";


/* EXO :  (cf. sharemycode.fr/exercices)
    1. ajouter un input dans la balise form. L'input sera nommé 'nombre2'.
    Affichez toutes les valeurs envoyés par le formulaire (qui est en méthode GET)
    
    2. Récupérez les 2 valeurs et affichez la somme des 2

    3. Ajouter dans le fichier functions.inc.php, une fonction nommée 'operation' qui prend 2 arguments
    et qui retourne la somme des 2 arguments.
    Modifier le code qui suit pour utiliser cette fonction 
    
*/

//     <!-- EXO : ajouter une balise select qui affichera les valeurs suivantes
//         +
//         -
//         /
//         *
//         qui aura comme name 'operateur'
//         et qui sera vide par défaut (c'est-à-dire qu'aucune valeur de sera sélectionnée par défaut)
//     -->

// EXO : 
//     modifier la fonction 'operation' pour que l'on puisse passer un 3ième argument
//     qui sera l'opérateur et qui peut avoir comme valeur (+ - / *)
//     La fonction va renvoyer le résultat de l'addition si l'opérateur est +,
//                                            la soustraction si l'opérateur est - 
//                                            la multiplaction si l'opérateur est *
//                                            la division si si l'opérateur est /    

