<?php
session_start();

try { // requête pour selectionner l'utilisateur qui a les identifiants entrés dans le form connexion

     $bd = new PDO('mysql:host=localhost;dbname=BDP5', 'root', '');
     $bd->query("SET NAMES 'utf8'");
     $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     // on déclare les variables concernées par le mail et le mdp
     $email = $_POST['email'];
     $mdp = $_POST['mdp'];
    

     $requete = $bd->prepare("SELECT * FROM `userLivres` WHERE `email` = :email AND `mdp` = :mdp");
     $requete->bindValue(':email', $email);
     $requete->bindValue(':mdp', $mdp);

     $requete->execute();
     $obj = $requete->fetch(PDO::FETCH_OBJ);
 

     if (!empty($obj)) {
     
          $nom = $obj->nom;
          $prenom = $obj->prenom;
          $role = $obj->role;
          $_SESSION['nom'] = $nom;
          $_SESSION['prenom'] = $prenom;
          $_SESSION['role'] = $role;


          // redirection vers la page d'accueil si les données sont récupérées
          header("Location: indexConnex.php");
          exit();
     } else {
          echo "connexion impossible";
     }
} catch (PDOException $e) {
     // on termine le script en affichant le code de l'erreur et le message
     die('<p> Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
}
?>