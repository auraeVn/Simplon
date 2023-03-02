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
      <h1><a href="index.php">Bibliothèque du Cloître</a></h1>

      <?php
      include "header.php";
      ?>
<h5>Modifier ici les informations nécessaires et cliquer sur ajouter</h5>
      <?php

      try {

         $bd = new PDO('mysql:host=localhost;dbname=BDP5', 'root', '');
         $bd->query("SET NAMES 'utf8'");
         $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $Id = $_GET['id'];

         $requete = $bd->prepare("SELECT * FROM Livres WHERE Id='$Id'");
         $requete->execute();
         $obj = $requete->fetch(PDO::FETCH_OBJ);

      ?>

         <!-- Formulaire à remplir afin de récupérer les données pour les ajouter à la BDD -->
         <form method="post" action="edit.php?id=<?= $Id ?>">


            <div class="formDiv">
               <label class="labelForm" for="ISBN">ISBN :</label><br>
               <input class="form" required type="text" name="ISBN" value='<?= $obj->ISBN; ?>' id="ISBN" />
            </div>

            <div class="formDiv">
               <label class="labelForm" for="titre">Titre :</label><br>
               <input class="form" required type="text" name="titre" value='<?= $obj->Titre; ?>' id="titre" />
            </div>

            <div class="formDiv">
               <label class="labelForm" for="theme">Thème :</label><br>
               <input class="form" required type="text" name="theme" value='<?= $obj->Theme; ?>' id="theme" />
            </div>

            <div class="formDiv">
               <label class="labelForm" for="pages">Nombre de pages :</label><br>
               <input class="form" required type="number" name="pages" value='<?= $obj->Nombre_de_pages; ?>' id="pages" min="1" max="1000" />
            </div>

            <div class="formDiv">
               <label class="labelForm" for="format">Format :</label><br>
               <input class="form" required type="text" name="format" value='<?= $obj->Format; ?>' id="format" />
            </div>

            <div class="formDiv">
               <label class="labelForm" for="nom">Nom Auteur :</label><br>
               <input class="form" required type="text" name="nom" value='<?= $obj->Nom_Auteur; ?>' id="nom" />
            </div>

            <div class="formDiv">
               <label class="labelForm" for="prenom">Prénom Auteur :</label><br>
               <input class="form" required type="text" name="prenom" value='<?= $obj->Prenom_Auteur; ?>' id="prenom" />
            </div>

            <div class="formDiv">
               <label class="labelForm" for="editeur">Editeur :</label><br>
               <input class="form" required type="text" name="editeur" value='<?= $obj->Editeur; ?>' id="editeur" />
            </div>

            <div class="formDiv">
               <label class="labelForm" for="annee">Année d'édition :</label><br>
               <input class="form" required type="number" name="annee" value='<?= $obj->Annee_edition; ?>' id="annee" />
            </div>

            <div class="formDiv">
               <label class="labelForm" for="prix">Prix :</label><br>
               <input class="form" required type="number" name="prix" value='<?= $obj->Prix; ?>' id="prix"  min="1" max="1000" />
            </div>

            <div class="formDiv">
               <label class="labelForm" for="langue">Langue :</label><br>
               <input class="form" required type="text" name="langue" value='<?= $obj->Langue; ?>' id="langue" />
            </div>


            <div class="connexButtonDiv">
            <button type="submit" class="btnC">Modifier</button>
            </div>

         </form>

      <?php
      } catch (PDOException $e) {
         die('<p> Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
      }

      include "footer.php";
      ?>
   </div>

</body>

</html>