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
  <h6>Inscription au site de référencement des livres de la bibliothèque du Cloître</h6>

<?php
  include "headerConnex.php";
?>

    <form method="post" action="traitementInscription.php">

      <div>
        <label for="nom">Nom :</label>
        <input class="form-control" required="required" placeholder="Nom" type="text" name="nom" />
      </div>

      <div>
        <label for="prenom">Prenom :</label>
        <input class="form-control"required="required" placeholder="Prénom" type="text" name="prenom" />
      </div>

      <div>
        <label for="email">Adresse email :</label>
        <input class="form-control" required="required" placeholder="Email"  type="email" name="email" />
      </div>

      <div>
        <label for="mdp">Mot de passe :</label>
        <input class="form-control" required="required" placeholder="Mot de passe" type="password" name="mdp" />
      </div>

      <div>
        <input type="submit" value="s'inscrire" />
      </div>
    </form>


  </div>
</body>

</html>