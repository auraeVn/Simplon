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
    <h1>Bibliothèque du Cloître</h1>
    <h6>Entrez les informations nécessaires pour ajouter un livre et cliquer sur ajouter</h6>

<?php

// Include affiche le Header et le Footer
include "header.php";
?>


<!-- Formulaire à remplir afin de récupérer les données pour les ajouter à la BDD -->
<form method="post" action="traitementAjoutLivre.php">
<table>
  
 <tr>
   <td><label for="nom">ISBN :</td>
   <td><input required type="text" name="ISBN" id="lastName" /></label></td>
 </tr>

 <tr>
    <td><label for="nom">Titre :</td>
   <td><input required type="text" name="titre" id="lastName" /></label></td>
 </tr>

   <tr>
    <td><label for="nom">Thème :</td>
   <td><input required type="text" name="theme" id="lastName" /></label></td>
  </tr>

 <tr>
    <td><label for="nom">Nombre de pages :</td>
   <td><input required type="number" name="pages" id="lastName" /></label></td>
 </tr>

 <tr>
    <td><label for="nom">Format :</td>
   <td><input required type="text" name="format" id="lastName" /></label></td>
 </tr>

 <tr>
    <td><label for="nom">Nom Auteur :</td>
   <td><input required type="text" name="nom" id="lastName" /></label></td>
</tr>

<tr>
    <td><label for="nom">Prénom Auteur :</td>
   <td><input required type="text" name="prenom" id="lastName" /></label></td>
</tr>

 <tr>
    <td><label for="nom">Editeur :</td>
   <td><input required type="text" name="editeur" id="lastName" /></label></td>
</tr>

<tr><td><label for="nom">Année d'édition :</td>
   <td><input required type="number" name="annee" id="lastName" /></label></td>
</tr>

<tr><td><label for="nom">Prix :</td>
   <td><input required type="number" name="prix" id="lastName" /></label></td>
</tr>

<tr><td><label for="nom">Langue :</td>
   <td><input required type="text" name="langue" id="lastName" /></label></td>
</tr>
  
</table>


<label class="envoi" for="Ajouter">
    <input type="submit" value="Ajouter" name="envoi"/>
</label>

</form>

</div>
</body>
</html>