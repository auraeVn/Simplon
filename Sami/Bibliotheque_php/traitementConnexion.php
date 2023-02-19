<?php

session_start();
 

// on se connecte à la bdd
    $connex = mysqli_connect('localhost', 'root', '', 'BDP5');

 if (!$connex) {
     echo "<script type=text/javascript>";
     echo "alert('Connexion impossible à la base de données')</script>";
 } 
 else {
     echo "<script type=text/javascript>";
     echo "alert('Connexion à la base de données réussie')</script>";


// on déclare les variables concernées par le mail et le mdp
     $email = $_POST['email'];
     $mdp = $_POST['mdp'];
     //echo $email ." ".$mdp;


// requête pour selectionner l'utilisateur qui a les identifiants entrés dans le form connexion
     $requete = "SELECT * FROM `userLivres` WHERE `email` = '$email' AND `mdp` = '$mdp'";
     $result = mysqli_query($connex, $requete);
     $donnees = mysqli_fetch_array($result);

// Stockage des données nom prenom avec leur index du tableau pour les récupérer sur d'autres pages
     $nom = $donnees[1];
     $prenom = $donnees[2];
     $_SESSION['nom'] = $nom;
     $_SESSION['prenom'] = $prenom;


// redirection vers la page d'accueil si les données sont récupérées
  if ($donnees) {
    header("Location: indexConnex.php");
//si non
  } else {
    echo "Problème !!!";
}


mysqli_close($connex);
 }