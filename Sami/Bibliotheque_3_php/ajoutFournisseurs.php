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
      <form class="formConnex" method="post" action="traitementAjoutFournisseurs.php">


         <div class="formDiv">
            <label class="labelForm" for="code">Code :</label>
            <input class="form" required type="text" name="code" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="RS">Raison Sociale :</label>
            <input class="form" required type="text" name="RS" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="adresse">Adresse :</label>
            <input class="form" required type="text" name="adresse" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="CP">Code postal :</label>
            <input class="form" required type="number" name="CP" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="localite">Ville :</label>
            <input class="form" required type="text" name="localite" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="pays">Pays :</label>
            <input class="form" required type="text" name="pays" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="tel">Télephone :</label>
            <input class="form" required type="number" name="tel" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="website">Site :</label>
            <input class="form" required type="text" name="website" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="email">Email : </label>
            <input class="form" required type="text" name="email" />
         </div>

         <div class="formDiv">
            <label class="labelForm" for="fax">Fax : </label>
            <input class="form" required type="number" name="fax" />
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