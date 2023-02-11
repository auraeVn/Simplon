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
      <h6>Connexion au site de référencement des livres de la bibliothèque du Cloître</h6>

<?php
include "headerConnex.php";
?> 

        <form action="traitementConnexion.php" method="post">

            <div class="">
                <label for="email">Email :</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required="required" >
            </div>

            <div class="">
                <label for="mdp">Mot de passe :</label>
                <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required="required" >
            </div>

            <div class="">
                <button type="submit" class="">Connexion</button>
            </div>


        </form>

    </div>

</body>

</html>