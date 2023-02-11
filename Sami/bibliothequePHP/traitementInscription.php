
<?php

// connexion à la BDD 'BDP5' avec ==> 'nom du serveur', 'nom utilisateur', 'mdp','nom BDD'
$connex = mysqli_connect('localhost', 'root', '', 'BDP5');

if (!$connex) {
    echo "<script type=text/javascript>";
    echo "alert('Connexion impossible à la base de données')</script>";
}

// si connexion fonctionne alors les données du formulaire sont transmises à la BDD
else {
    echo "<script type=text/javascript>";
    echo "alert('Connexion à la base de données réussie')</script>";


    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $email = trim($_POST["email"]);
    $mdp = trim($_POST["mdp"]);

    //  echo "nom: $nom <br>";
    //  echo "nom: $prenom <br>";
    //  echo "nom: $email <br>";
    //  echo "nom: $mdp <br>";

    $requete = "INSERT INTO `userLivres` (nom, prenom, email, mdp)
      VALUES('$nom','$prenom','$email','$mdp')";

    $result = mysqli_query($connex, $requete);

    if (!$result) {
        echo "<script type='text/javascript'>";
        echo "alert('Inscription échouée')</script>";
        header("Location: index.php");
        exit;
    } else {
        echo "<script type=text/javascript>";
        echo "alert('Inscription réussie, veuillez vous connecter')</script>";
        header("Location: index.php");
        exit;
    }


    // cloture de la connexion à la BDD
    mysqli_close($connex);
}



/* VERSION TUTO

<?php


// on vérifie si le formulaire a été envoyé
if(!empty($_POST)){
    // Le formulaire a été envoyé
    // on vérifie que tous les champs requis sont remplis
if(isshet($_POST["nom"], $_POST["mdp"]) && !empty($_POST["nom"]) && !empty($_POST["mdp"])
){
    // Le formulaire est complet
    // on récupère les données en les protégeant
    $nom = strip_tags($_POST["nom"]);  
    // strip_tags supprime les  balises html et php d'une chaine

    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL )){
    // Vérifie que l'email est correct 
    }
    
    // On va hasher le mot de passe avec password_hash
    $pass = password_hash($_POST["pass"], PASSWORD_ARGON2ID);

    // ajouter ici tous les controles souhaités

    // On enregistre en bdd en se connectant
    require_once "includes/connect.php";

    $sql ="INSERT INTO `userLivres`(`email`, `mdp`, `nom`) VALUES (:email, '$pass', :nom, '[\"ROLE_USER\"]')";

    // preparer la requete 
    $query = $db->prepare($sql);
    $query->bindValue(":name", $name, PDO::PARAM_STR);
    $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);

    $query->execute();

    // on connectera l'utilisateur

    else {
        die("Le formulaire est incomplet");
    }
}


*/
?>