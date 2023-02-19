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
      <form class="formConnexAjout" method="post" action="traitementAjoutLivre.php">
         <table>

            <tr>
               <th class="thAjout"><label for="nom">ISBN :</label></th>
               <td class="tdAjout"><input class="inputAjout" required type="text" name="ISBN" /></td>
            </tr>

            <tr>
               <th class="thAjout"><label for="nom">Titre :</label></th>
               <td class="tdAjout"><input class="inputAjout" required type="text" name="titre" /></td>
            </tr>

            <tr>
               <th class="thAjout"><label for="nom">Thème :</label></th>
               <td class="tdAjout"><input class="inputAjout" required type="text" name="theme" /></td>
            </tr>

            <tr>
               <th class="thAjout"><label for="nom">Nombre de pages :</label></th>
               <td class="tdAjout"><input class="inputAjout" required type="number" name="pages" /></td>
            </tr>

            <tr>
               <th class="thAjout"><label for="nom">Format :</label></th>
               <td class="tdAjout"><input class="inputAjout" required type="text" name="format" /></td>
            </tr>

            <tr>
               <th class="thAjout"><label for="nom">Nom Auteur :</label></th>
               <td class="tdAjout"><input class="inputAjout" required type="text" name="nom" /></td>
            </tr>

            <tr>
               <th class="thAjout"><label for="nom">Prénom Auteur :</label></th>
               <td class="tdAjout"><input class="inputAjout" required type="text" name="prenom" /></td>
            </tr>

            <tr>
               <th class="thAjout"><label for="nom">Editeur :</label></th>
               <td class="tdAjout"><input class="inputAjout" required type="text" name="editeur" /></td>
            </tr>

            <tr>
               <th class="thAjout"><label for="nom">Année d'édition : </label></th>
               <td class="tdAjout"><input class="inputAjout" required type="number" name="annee" /></td>
            </tr>

            <tr>
               <th class="thAjout"><label for="nom">Prix : </th>
               <td class="tdAjout"><input class="inputAjout" required type="number" name="prix" /></td>
            </tr>

            <tr>
               <th class="thAjout"><label for="nom">Langue :</label></th>
               <td class="tdAjout"><input class="inputAjout" required type="text" name="langue" /></td>
            </tr>

         </table>

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