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
    <h1>Modification de livre</h1>
    <h6>Modifier ici les informations nécessaires et cliquer sur ajouter</h6>

<?php

// Include affiche le Header et le Footer
include "header.php";
?>

<?php
    $id = $_GET['id'];
    $connex = mysqli_connect('localhost', 'root', '', 'BDP5');

        $requete = "SELECT * FROM Livres WHERE id='$id'";
        $result = mysqli_query($connex, $requete);
        //var_dump(mysqli_fetch_array($result));
        $book = mysqli_fetch_array($result);
 ?>

<!-- Formulaire à remplir afin de récupérer les données pour les ajouter à la BDD -->
<form method="post" action="edit.php?id=<?= $id ?>">
<table>
  
 <tr>
   <td><label for="ISBN">ISBN :</td>
   <td><input required type="text" name="ISBN" value='<?= $book['ISBN']; ?>' id="lastName" /></label></td>
 </tr>

 <tr>
    <td><label for="titre">Titre :</td>
   <td><input required type="text" name="titre" value='<?= $book['Titre']; ?>' id="lastName" /></label></td>
 </tr>

   <tr>
    <td><label for="theme">Thème :</td>
   <td><input required type="text" name="theme" value='<?= $book['Theme']; ?>' id="lastName" /></label></td>
  </tr>

 <tr>
    <td><label for="pages">Nombre de pages :</td>
   <td><input required type="number" name="pages" value='<?= $book['Nombre_de_pages']; ?>' id="lastName" /></label></td>
 </tr>

 <tr>
    <td><label for="format">Format :</td>
   <td><input required type="text" name="format" value='<?= $book['Format']; ?>' id="lastName" /></label></td>
 </tr>

 <tr>
    <td><label for="nom">Nom Auteur :</td>
   <td><input required type="text" name="nom" value='<?= $book['Nom_Auteur']; ?>' id="lastName" /></label></td>
</tr>

<tr>
    <td><label for="prenom">Prénom Auteur :</td>
   <td><input required type="text" name="prenom" value='<?= $book['Prenom_Auteur']; ?>' id="lastName" /></label></td>
</tr>

 <tr>
    <td><label for="editeur">Editeur :</td>
   <td><input required type="text" name="editeur" value='<?= $book['Editeur']; ?>' id="lastName" /></label></td>
</tr>

<tr><td><label for="annee">Année d'édition :</td>
   <td><input required type="number" name="annee" value='<?= $book['Annee_edition']; ?>' id="lastName" /></label></td>
</tr>

<tr><td><label for="prix">Prix :</td>
   <td><input required type="number" name="prix" value='<?= $book['Prix']; ?>' id="lastName" /></label></td>
</tr>

<tr><td><label for="langue">Langue :</td>
   <td><input required type="text" name="langue" value='<?= $book['Langue']; ?>' id="lastName" /></label></td>
</tr>
  
</table>


<label class="envoi" for="Ajouter">
    <input type="submit" value="modifier" name="envoi"/>
</label>

</form>
    
</div>
</body>
</html>