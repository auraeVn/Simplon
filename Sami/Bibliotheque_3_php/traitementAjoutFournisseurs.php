<?php
session_start();

$code = trim($_POST["code"]);   // trim() permet de supprimer les espaces avant et après le mot saisi
$RS = trim($_POST["RS"]);
$adresse = trim($_POST["adresse"]);
$CP = trim($_POST["CP"]);
$localite = trim($_POST["localite"]);
$pays = trim($_POST["pays"]);
$tel = trim($_POST["tel"]);
$website = trim($_POST["website"]);
$email = trim($_POST["email"]);
$fax = trim($_POST["fax"]);

try {

    $bd = new PDO('mysql:host=localhost;dbname=BDP5', 'root', '');
    $bd->query("SET NAMES 'utf8'");
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('<p> Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
}
try {
    $requete = $bd->prepare("INSERT INTO fournisseurs (code_fournisseurs, raison_sociale, rue_fournisseurs, code_postal, localite, pays, tel_fournisseurs, url_fournisseurs, email_fournisseurs, fax_fournisseurs)
                   VALUES(:code, :RS, :adresse, :CP, :localite, :pays, :tel, :website, :email, :fax)");

    $requete->bindValue(':code', $code);
    $requete->bindValue(':RS', $RS);
    $requete->bindValue(':adresse', $adresse);
    $requete->bindValue(':CP', $CP);
    $requete->bindValue(':localite', $localite);
    $requete->bindValue(':pays', $pays);
    $requete->bindValue(':tel', $tel);
    $requete->bindValue(':website', $website);
    $requete->bindValue(':email', $email);
    $requete->bindValue(':fax', $fax);

    $requete->execute();
    $obj = $requete->fetch(PDO::FETCH_OBJ);

} catch (PDOException $e) {
    die('<p> Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
}
header("Location: affichageFournisseurs.php");