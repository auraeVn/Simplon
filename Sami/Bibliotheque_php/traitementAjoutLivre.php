<?php

// connexion à la BDD 'BDP5' avec ==> 'nom du serveur', 'nom utilisateur', 'mdp','nom BDD'
$connex = mysqli_connect('localhost', 'root', '', 'BDP5');

if (!$connex) {
    echo "<script type=text/javascript>";
    echo "alert('Connexion impossible a la base de données')</script>";
} 

// si connexion fonctionne alors les données du formulaire sont transmises à la BDD
else {
    echo "<script type=text/javascript>";
    echo "alert('Connexion a la base de données reussie')</script>";


    $ISBN = trim($_POST["ISBN"]);   // trim() permet de supprimer les espaces avant et après le mot saisi
    $Titre = trim($_POST["titre"]);
    $Theme = trim($_POST["theme"]);
    $NbrPages = trim($_POST["pages"]);
    $Format = trim($_POST["format"]);
    $NomAuteur = trim($_POST["nom"]);
    $PrenomAuteur = trim($_POST["prenom"]);
    $Editeur = trim($_POST["editeur"]);
    $AnneeEdition = trim($_POST["annee"]);
    $Prix = trim($_POST["prix"]);
    $Langue = trim($_POST["langue"]);


$requete = "INSERT INTO livres (ISBN, Titre, Theme, Nombre_de_pages, format, Nom_Auteur, Prenom_Auteur, Editeur, Annee_edition, Prix, Langue)
VALUES('$ISBN','$Titre','$Theme','$NbrPages','$Format','$NomAuteur','$PrenomAuteur','$Editeur','$AnneeEdition','$Prix', '$Langue')";
$result = mysqli_query($connex, $requete);
    if(!$result)
    {
        echo "Insertion impossible";
    }
    else {
        echo "Insertion réussie";
      }
    
      // Utilisation de la fonction 'header()' pour rediriger vers la page d'affichage après l'ajout d'un livre dans le formulaire
      if($ISBN !=''&& $Titre !=''&& $Theme !=''&& $NbrPages !=''&& $Format !=''&& $NomAuteur !=''&& $PrenomAuteur !=''&& $AnneeEdition !=''&& $Prix !=''&& $Langue !='')
      {
      header("Location: affichageLivres.php");
      }
      else{
      echo '<span>Remplir tous les champs SVP</span>';
      }
    
     }
    
    // cloture de la connexion à la BDD
    mysqli_close($connex);
