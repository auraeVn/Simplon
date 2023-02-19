<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js" defer></script>
</head>

<!-- Pour utilisateur CONNECTÉ -->

<body>
    <div class="containerHeader">

        <?php
        session_start();
        echo '<p class="login">' . "Bonjour " . $_SESSION['prenom'] . '</p>';
        ?>

        <!-- Header avec deux boutons et un menu déroulant avec Bootstrap -->
        <header>

            <button type="button" class="btn"><a href="deconnexion.php">Déconnexion</a></button>

            <div class="dropdown">
                <div class="select">
                    <span class="selected">Accueil</span>
                    <div class="fleche"></div>
                </div>
                <ul class="menu">
                    <li><a href="affichageLivres.php">Afficher les livres</a></li>
                    <li><a href="ajoutLivre.php">Ajouter un livre</a></li>
                    <li><a href="formRechercheAuteur.php">Recherche par Auteur.e</a></li>
                </ul>
            </div>

        </header>

    </div>
</body>

</html>