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
        <h1><a href="indexConnex.php">Bibliothèque du Cloître</a></h1>
        <?php
        include "header.php";
        ?>
        <h5>Recherche de livres par nom d'Auteur.e</h5>

        <form class="formConnexAjout" method="post" action="traitementRechercheAuteur.php">

            <div class="formDiv">
                <label class="labelForm" for="nom"></label>
                <input class="form" required="required" placeholder="Nom" type="text" name="lettre" />
            </div>

            <div class="connexButtonDiv">
                <button type="submit" class="btnC">Chercher</button>
            </div>

        </form>
        <?php
        include "footer.php";
        ?>
    </div>
</body>

</html>