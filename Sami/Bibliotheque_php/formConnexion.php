<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <h1><a href="index.php">Bibliothèque du Cloître</a></h1>
        <?php
        include "headerConnex.php";
        ?>
        <h5>Connexion au site de référencement des livres de la bibliothèque du Cloître</h5>

        <form class="formConnex" action="traitementConnexion.php" method="post">

            <div class="formDiv">
                <label class="labelForm" for="email">Email</label><br>
                <input type="email" name="email" class="form" placeholder="Email" required="required">
            </div>

            <div class="formDiv">
                <label class="labelForm" for="mdp">Mot de passe</label><br>
                <input type="password" name="mdp" class="form" placeholder="Mot de passe" required="required">
            </div>

            <div class="connexButtonDiv">
                <button type="submit" class="btnC">Connexion</button>
            </div>


        </form>

        <?php
        include "footer.php";
        ?>
    </div>

</body>

</html>