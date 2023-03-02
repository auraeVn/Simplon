<?php

session_start();

$Isbn = trim($_POST["Isbn"]);   // trim() permet de supprimer les espaces avant et après le mot saisi
$titre = trim($_POST["titre"]);
$theme = trim($_POST["theme"]);
$pages = trim($_POST["pages"]);
$format = trim($_POST["format"]);
$nom = trim($_POST["nom"]);
$prenom = trim($_POST["prenom"]);
$editeur = trim($_POST["editeur"]);
$annee = trim($_POST["annee"]);
$prix = trim($_POST["prix"]);
$langue = trim($_POST["langue"]);

try { 
    $bd = new PDO('mysql:host=localhost;dbname=BDP5', 'root', '');
    $bd->query("SET NAMES 'utf8'");
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die('<p> Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
}

try { 
$requete = $bd->prepare("INSERT INTO Livres (ISBN, Titre, Theme, Nombre_de_pages, Format, Nom_Auteur, Prenom_Auteur, Editeur, Annee_edition, Prix, Langue)
                   VALUES(:Isbn, :titre, :theme, :pages, :format, :nom, :prenom, :editeur, :annee, :prix, :langue)");

    $requete->bindValue(':Isbn', $Isbn);
    $requete->bindValue(':titre', $titre);
    $requete->bindValue(':theme', $theme);
    $requete->bindValue(':pages', $pages);
    $requete->bindValue(':format', $format);
    $requete->bindValue(':nom', $nom);
    $requete->bindValue(':prenom', $prenom);
    $requete->bindValue(':editeur', $editeur);
    $requete->bindValue(':annee', $annee);
    $requete->bindValue(':prix', $prix);
    $requete->bindValue(':langue', $langue);

    $requete->execute();
    $obj = $requete->fetch(PDO::FETCH_OBJ);


} catch (PDOException $e) {
    die('<p> Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
}

 header("Location: affichageLivres.php");