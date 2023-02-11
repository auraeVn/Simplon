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
        <h1>Bibliothèque du Cloître</h1>
        <h6>Recherche de livres par nom d'Auteur.e</h6>

        <?php
        include "header.php";
        ?>

        <form method="post" action="traitementRechercheAuteur.php">
            
            <div>
                <label for="nom">Recherche par nom d'Auteur.e</label>
                <input class="form-control" required="required" placeholder="Nom" type="text" name="nom" />
            </div>

            <div>
            <input type="submit" value="chercher" />
            </div>

        </form>
    </div>
</body>

</html>