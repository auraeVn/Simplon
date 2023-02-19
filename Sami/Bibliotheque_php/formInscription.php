<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque du Cloître</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <h1><a href="index.php">Bibliothèque du Cloître</a></h1>

        <?php
        include "headerConnex.php";
        ?>
        <h5>Inscription au site de référencement des livres de la bibliothèque du Cloître</h5>

        <form class="formConnex" method="post" action="traitementInscription.php">

            <div class="formDiv">
                <label class="labelForm" for="nom">Nom</label><br>
                <input class="form" required="required" placeholder="Nom" type="text" name="nom" />
            </div>

            <div class="formDiv">
                <label class="labelForm" for="prenom">Prenom</label><br>
                <input class="form" required="required" placeholder="Prénom" type="text" name="prenom" />
            </div>

            <div class="formDiv">
                <label class="labelForm" for="email">Adresse email</label><br>
                <input class="form" required="required" placeholder="Email" type="email" name="email" />
            </div>

            <div class="formDiv">
                <label class="labelForm" for="mdp">Mot de passe</label><br>
                <input class="form" required="required" placeholder="Mot de passe" type="password" name="mdp" />
            </div>

            <div class="connexButtonDiv">
                <button type="submit" class="btnC">Inscription</button>
            </div>
        </form>

        <?php
        include "footer.php";
        ?>
    </div>
   
</body>

</html>