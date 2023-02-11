<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <h1>Bibliothèque du Cloître</h1>
        <h6>Recherche par nom d'Auteur.e</h6>

        <?php
        include "header.php";
        ?>

        <form method="post" action="traitementRechercheAuteur.php">
            <div>
                <label for="nom">Recherche par nom d'Auteur.e</label>
                <input class="form-control" required="required" placeholder="Nom" type="text" name="nom" />
            </div>

            <div>
            <input type="submit" value="chercher" />
            </div>
        </form>
          </form>

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
     echo "alert('Connexon a la base de données reussie')</script>";

$NomAuteur = $_POST["nom"];

     
    $requete = "SELECT * FROM livres WHERE Nom_Auteur = '$NomAuteur'";
    $result = mysqli_query($connex, $requete);

    echo '<div class="table-responsive">';
    echo '<table class="table">';
     echo '<thead>';
           echo '<tr class="key">';
           echo '<td>' . '<b>' . 'Id  ' . '</b>' . '</td>';
           echo '<td>' . '<b>' .  'ISBN ' . '</b>' . '</td>';
           echo '<td>' . '<b>' .  'Titre ' . '</b>' . '</td>';
           echo '<td>' . '<b>' .  'Thème ' . '</b>' . '</td>';
           echo '<td>' . '<b>' .  'Nombre de pages ' . '</b>' . '</td>';
           echo '<td>' . '<b>' . 'format ' . '</b>' . '</td>';
           echo '<td>' . '<b>' . 'Nom Auteur ' . '</b>' . '</td>';
           echo '<td>' . '<b>' . 'Prenom Auteur ' . '</b>' . '</td>';
           echo '<td>' . '<b>' . 'Editeur ' . '</b>' . '</td>';
           echo '<td>' . '<b>' . 'Année d\'édition ' . '</b>' . '</td>';
           echo '<td>' . '<b>' . 'Prix ' . '</b>' . '</td>';
           echo '<td>' . '<b>' . 'Langue ' . '</b>' . '</td>';
           echo '</tr>';
      echo '</thead>';
   
      //Exploiter result à l'aide d'une boucle pour récuperer un tableau associatif
      //$donnees recuperé avec la fonction 'mysqli_fetch_array'(ATTENTION array pas SENSIBLE a la CASSE)
      while ($donnees = mysqli_fetch_array($result)) {
   
      // Les valeurs affichées dans le tableau
      echo '<tbody>';
               echo '<tr class="value">';
               echo '<td>' . $donnees[0] . "  " . '</td>';
               echo '<td>' . $donnees[1] . "  " . '</td>';
               echo '<td>' . $donnees[2] . " " . '</td>';
               echo '<td>' . $donnees[3] . " " . '</td>';
               echo '<td>' . $donnees[4] . " " . '</td>';
               echo '<td>' . $donnees[5] . " " . '</td>';
               echo '<td>' . $donnees[6] . " " . '</td>';
               echo '<td>' . $donnees[7] . " " . '</td>';
               echo '<td>' . $donnees[8] . " " . '</td>';
               echo '<td>' . $donnees[9] . " " . '</td>';
               echo '<td>' . $donnees[10] . " " . '</td>';
               echo '<td>' . $donnees[11] . " " . '</td>';
               echo '</tr>';
     echo '</tbody>';
   }
      echo '</table>';
   

 
 }
// cloture de la connexion à la BDD
mysqli_close($connex);

?>
 </div>

</body>

</html>
