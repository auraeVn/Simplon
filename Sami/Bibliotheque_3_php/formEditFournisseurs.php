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
    <h5>Modifier ici les informations nécessaires et cliquer sur ajouter</h5>

<?php
include "header.php";
?>

<?php
      
      try {

         $bd = new PDO('mysql:host=localhost;dbname=BDP5', 'root', '');
         $bd->query("SET NAMES 'utf8'");
         $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $Id = $_GET['id'];

         $requete = $bd->prepare("SELECT * FROM fournisseurs WHERE `Id_fournisseurs` = :id");
         $requete->bindParam(':id', $Id);
         $requete->execute();
         $obj = $requete->fetch(PDO::FETCH_OBJ);

         ?>

<!-- Formulaire à remplir afin de récupérer les données pour les ajouter à la BDD -->
<form method="post" action="editFournisseurs.php?id=<?= $Id ?>">
<table>
  
 <tr>
   <td><label for="code">Code :</td>
   <td><input required type="text" name="code" value='<?= $obj->code_fournisseurs; ?>' id="code" /></label></td>
 </tr>

 <tr>
    <td><label for="RS">Raison Sociale :</td>
   <td><input required type="text" name="RS" value='<?= $obj->raison_sociale; ?>' id="RS" /></label></td>
 </tr>

   <tr>
    <td><label for="adresse">Adresse :</td>
   <td><input required type="text" name="adresse" value='<?= $obj->rue_fournisseurs; ?>' id="adresse" /></label></td>
  </tr>

  <tr>
    <td><label for="CP">Code postal :</td>
   <td><input required type="text" name="CP" value='<?= $obj->code_postal; ?>' id="CP" /></label></td>
  </tr>

 <tr>
    <td><label for="localite">Localité :</td>
   <td><input required type="number" name="localite" value='<?= $obj->localite; ?>' id="localite" /></label></td>
 </tr>

 <tr>
    <td><label for="pays">Pays :</td>
   <td><input required type="text" name="pays" value='<?= $obj->pays; ?>' id="pays" /></label></td>
 </tr>

 <tr>
    <td><label for="tel">Telephone :</td>
   <td><input required type="text" name="tel" value='<?= $obj->tel_fournisseurs; ?>' id="tel" /></label></td>
</tr>

<tr>
    <td><label for="website">Website :</td>
   <td><input required type="text" name="website" value='<?= $obj->url_fournisseurs; ?>' id="website" /></label></td>
</tr>

 <tr>
    <td><label for="email">Email :</td>
   <td><input required type="text" name="email" value='<?= $obj->email_fournisseurs; ?>' id="email" /></label></td>
</tr>

<tr><td><label for="fax">Fax :</td>
   <td><input required type="number" name="fax" value='<?= $obj->fax_fournisseurs; ?>' id="fax" /></label></td>
</tr>
  
</table>


<label class="envoi" for="Ajouter">
    <input type="submit" value="modifier" name="envoi"/>
</label>

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