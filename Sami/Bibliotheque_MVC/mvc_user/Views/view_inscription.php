<div class="signUpBlur">
    <div class="signUp">
        <p>Sign In</p>
    </div>
    <form class="formConnex" method="post" action="?controller=user&action=traitement_inscription">

        <div class="input-group flex-nowrap">
            <input type="text" class="form-control" placeholder="Nom" name="nom" minlength="2" maxlength="30" required>
        </div>

        <div class="input-group flex-nowrap">
            <input type="text" class="form-control" placeholder="Prénom" name="prenom" minlength="2" maxlength="30" required>
        </div>

        <div class="input-group flex-nowrap">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>

        <div class="input-group flex-nowrap">
            <input type="password" class="form-control" placeholder="Mot de passe (au moins 8 caractères)" name="mdp" pattern=".{8,}" required>
        </div>

        <div class="connexButtonDiv">
            <button type="submit" class="btn btn-outline-light">Inscription</button>
        </div>
    </form>
</div>