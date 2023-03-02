<?php

try {

    $bd = new PDO('mysql:host=localhost;dbname=BDP5', 'root', '');
    $bd->query("SET NAMES 'utf8'");
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // on termine le script en affichant le code de l'erreur et le message
    die('<p> Echec de connexion. Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
}
echo 'avant redirection';

$Id = $_GET['id'];

try {
    $requete = $bd->prepare("DELETE FROM fournisseurs WHERE  Id_fournisseurs = '$Id'");
    $requete->execute();
    $obj = $requete->fetch(PDO::FETCH_OBJ);

    header("Location: affichageFournisseurs.php");
    
    
} catch (PDOException $e) {
    die('<p> Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
}
    ?>