
<?php


try { // requête pour selectionner l'utilisateur qui a les identifiants entrés dans le form connexion

    $bd = new PDO('mysql:host=localhost;dbname=BDP5', 'root', '');
    $bd->query("SET NAMES 'utf8'");
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // on déclare les variables concernées par le mail et le mdp
    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $email = trim($_POST["email"]);
    $mdp = trim($_POST["mdp"]);

    $requete = $bd->prepare("INSERT INTO `userLivres` (nom, prenom, email, mdp) VALUES (:nom, :prenom, :email, :mdp)");
    $requete->bindValue(':nom', $nom);
    $requete->bindValue(':prenom', $prenom);
    $requete->bindValue(':email', $email);
    $requete->bindValue(':mdp', $mdp);

    $requete->execute();
    $obj = $requete->fetch(PDO::FETCH_OBJ);

   } catch (PDOException $e) {
      // on termine le script en affichant le code de l'erreur et le message
      die('<p> Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
   }
   header("Location: index.php");

?>