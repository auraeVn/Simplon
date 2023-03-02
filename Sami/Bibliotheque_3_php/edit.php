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

$Id = $_GET['id'];

try {

    $bd = new PDO('mysql:host=localhost;dbname=BDP5', 'root', '');
    $bd->query("SET NAMES 'utf8'");
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = $bd->prepare("UPDATE Livres SET ISBN='$ISBN', Titre='$Titre',Theme='$Theme',Nombre_de_pages='$NbrPages',Format='$Format',
        Nom_Auteur='$NomAuteur', Prenom_Auteur='$PrenomAuteur', 
        Editeur='$Editeur', Annee_edition='$AnneeEdition', Prix='$Prix', Langue='$Langue' WHERE Id = '$Id'");
    $requete->execute();
    $obj = $requete->fetch(PDO::FETCH_OBJ);
    
    header("Location: affichageLivres.php");

}
catch (PDOException $e) {
    die('<p> Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
}


?>