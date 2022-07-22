<form action="" method="post">
    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" class="form-control" value="<?=$utilisateur["pseudo"] ??"" ?>"> 
    </div>
    <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" class="form-control" value="<?=$utilisateur["mdp"] ??"" ?>">
    </div>

    <div class="d-flex">
        <button type="submit" class="btn btn-primary mr-2">Se connecter</button>
        <button type="reset" class="btn btn-danger">Annuler</button>
    </div>
</form>