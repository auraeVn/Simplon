<?php

$code = trim($_POST["code"]);   // trim() permet de supprimer les espaces avant et après le mot saisi
$RS = trim($_POST["RS"]); // le titre ici fait référence à la valeur du nom='' dans le formulaire
$adresse = trim($_POST["adresse"]);
$CP = trim($_POST["CP"]);
$localite = trim($_POST["localite"]);
$pays = trim($_POST["pays"]);
$tel = trim($_POST["tel"]);
$website = trim($_POST["website"]);
$email = trim($_POST["email"]);
$fax = trim($_POST["fax"]);

$Id = $_GET['id'];

try {

    $bd = new PDO('mysql:host=localhost;dbname=BDP5', 'root', '');
    $bd->query("SET NAMES 'utf8'");
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = $bd->prepare("UPDATE fournisseurs SET code_fournisseurs='$code', raison_sociale='$RS',rue_fournisseurs='$adresse',code_postal='$CP',localite='$localite',
        pays='$pays', tel_fournisseurs='$tel', 
        url_fournisseurs='$website', email_fournisseurs='$email', fax_fournisseurs='$fax' WHERE Id_fournisseurs = '$Id'");
    $requete->execute();
    $obj = $requete->fetch(PDO::FETCH_OBJ);
    
    header("Location: affichageFournisseurs.php");

}
catch (PDOException $e) {
    die('<p> Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
}


?>