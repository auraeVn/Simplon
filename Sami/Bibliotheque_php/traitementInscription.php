
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

    mysqli_close($connex);
}

?>