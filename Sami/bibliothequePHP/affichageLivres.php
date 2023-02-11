<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque du cloître</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="container">
    <h1>Bibliothèque du Cloître</h1>
    <h6>Consultation</h6>
    
    <?php

    // Include affiche le Header et le Footer
    include "header.php";

    // connexion à la BDD 'BDP5'
    // Fonction de connexion mysqli_connect(4 parametres pour effectuer la connexion)
    $connex = mysqli_connect('localhost', 'root', '', 'BDP5');

    if (!$connex) {
        // si connexion échoue
        echo "<script type=text/javascript>";
        echo "alert('Connexion impossible a la base de données')</script>";
    } else {
        // Si connexion fonctionne
        echo "<script type=text/javascript>";
        echo "alert('Connexion a la base de données réussie')</script>";

        // Requete pour la connexion a la table 'livres'
        $requete = " SELECT * FROM livres";

        //fonction pour executer la requete 'mysqli_query' ensemble des enregistrements qui se trouvent dans livres
        $result = mysqli_query($connex, $requete);
        
// creation d'une table pour afficher les données de la BDD
echo '<div class="table-responsive">';
 echo '<table class="table">';
  echo '<thead>';
        echo '<tr class="key">';
        echo '<td>' . '<b>' . 'Id  ' . '</b>' . '</td>';
        echo '<td>' . '<b>' . 'ISBN ' . '</b>' . '</td>';
        echo '<td>' . '<b>' . 'Titre ' . '</b>' . '</td>';
        echo '<td>' . '<b>' . 'Thème ' . '</b>' . '</td>';
        echo '<td>' . '<b>' . 'Nombre de pages ' . '</b>' . '</td>';
        echo '<td>' . '<b>' . 'format ' . '</b>' . '</td>';
        echo '<td>' . '<b>' . 'Nom Auteur ' . '</b>' . '</td>';
        echo '<td>' . '<b>' . 'Prenom Auteur ' . '</b>' . '</td>';
        echo '<td>' . '<b>' . 'Editeur ' . '</b>' . '</td>';
        echo '<td>' . '<b>' . 'Année d\'édition ' . '</b>' . '</td>';
        echo '<td>' . '<b>' . 'Prix ' . '</b>' . '</td>';
        echo '<td>' . '<b>' . 'Langue ' . '</b>' . '</td>';
        echo '<td>' . '<b>' . 'Modifier ' . '</b>' . '</td>';
        echo '<td>' . '<b>' . 'Supprimer ' . '</b>' . '</td>';
        echo '</tr>';
   echo '</thead>';

   //Exploiter result à l'aide d'une boucle pour récuperer un tableau associatif
   //$donnees recuperé avec la fonction 'mysqli_fetch_array'(ATTENTION array pas SENSIBLE a la CASSE)
   while ($donnees = mysqli_fetch_array($result)) {

   // Les valeurs affichées dans le tableau
   echo '<tbody>';
            echo '<tr class="value">';
            echo '<td>' . $donnees[0] . " " . '</td>';
            echo '<td>' . $donnees[1] . " " . '</td>';
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
            echo '<td class="supp">' . "<a href='formEdit.php?id= " . $donnees[0] . "'><img src='images/edit.png'></a>" . '</td>';
            echo '<td class="supp">' . "<a href='delete.php?id=" . $donnees[0] . "'><img src='images/delete.png'></a>" . '</td>';
            
            echo '</tr>';
  echo '</tbody>';
}
   echo '</table>';
}

    //Cloture de la connexion a la base de données 
    mysqli_close($connex);
    ?>

</div>
</body>

</html>
