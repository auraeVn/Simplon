<?php

$ISBN = trim($_POST["ISBN"]);   // trim() permet de supprimer les espaces avant et après le mot saisi
$Titre = trim($_POST["titre"]); // le titre ici fait référence à la valeur du nom='' dans le formulaire
$Theme = trim($_POST["theme"]);
$NbrPages = trim($_POST["pages"]);
$Format = trim($_POST["format"]);
$NomAuteur = trim($_POST["nom"]);
$PrenomAuteur = trim($_POST["prenom"]);
$Editeur = trim($_POST["editeur"]);
$AnneeEdition = trim($_POST["annee"]);
$Prix = trim($_POST["prix"]);
$Langue = trim($_POST["langue"]);

$connex = mysqli_connect('localhost', 'root', '', 'BDP5');

$id = $_GET['id'];
if (!$connex) {
    // si connexion échoue
    echo "<script type=text/javascript>";
    echo "alert('Connexion impossible a la base de données')</script>";
} else {
    // Si connexion fonctionne
    echo "<script type=text/javascript>";
    echo "alert('Connexion a la base de données réussie')</script>";

    $requete = "UPDATE Livres SET ISBN='$ISBN', Titre='$Titre',Theme='$Theme',Nombre_de_pages='$NbrPages',Format='$Format',
    Nom_Auteur='$NomAuteur', Prenom_Auteur='$PrenomAuteur', 
    Editeur='$Editeur', Annee_edition='$AnneeEdition', Prix='$Prix', Langue='$Langue' WHERE id = '$id'";


 $result = mysqli_query($connex, $requete);
 $connex->query($requete);
 if ($result) {
     header("Location: affichageLivres.php");
 } else {
     echo "Erreur lors de la modification : " . mysqli_error($connex);
 }

mysqli_close($connex);
}


?>