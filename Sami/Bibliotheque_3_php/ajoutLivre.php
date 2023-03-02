<!DOCTYPE html>
<html lang="en">

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
      <h5>Entrez les informations nécessaires pour ajouter un livre</h5>

      <!-- Formulaire à remplir afin de récupérer les données pour les ajouter à la BDD -->
      <form class="formConnex" method="post" action="traitementAjoutLivre.php" novalidate>


         <div class="formDiv">
            <label class="labelForm" for="Isbn">ISBN* :</label>
            <input class="form" required type="text" name="Isbn" id="Isbn" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="titre">Titre* :</label>
            <input class="form" required minlength="2" maxlength="30" type="text" name="titre" id="titre" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="theme">Thème* :</label>
            <input class="form" required type="text" name="theme" id="theme" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="pages">Nombre de pages* :</label>
            <input class="form" required type="number" name="pages" id="pages" min="1" max="1000" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="format">Format* :</label>
            <input class="form" required type="text" name="format" id="format" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="nom">Nom Auteur* :</label>
            <input class="form" required minlength="2" maxlength="30" type="text" name="nom" id="nom" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="prenom">Prénom Auteur* :</label>
            <input class="form" required minlength="2" maxlength="30" type="text" name="prenom" id="prenom" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="editeur">Editeur* :</label>
            <input class="form" required type="text" name="editeur" id="editeur" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="annee">Année d'édition* : </label>
            <input class="form" required type="number" name="annee" id="annee" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="prix">Prix* :</label>
               <input class="form" required type="number" name="prix" id="prix"  min="1" max="1000" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="langue">Langue* :</label>
            <input class="form" required type="text" name="langue" id="langue" />
         </div>


         <div class="connexButtonDiv" for="Ajouter">
            <button type="submit" class="btnC">Ajouter</button>
         </div>

      </form>

      <?php
      include "footer.php";
      ?>
   </div>
</body>

</html>