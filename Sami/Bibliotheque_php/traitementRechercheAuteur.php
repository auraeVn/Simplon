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
    <h1><a href="indexConnex.php">Bibliothèque du Cloître</a></h1>
        <?php
        include "header.php";
        ?>
        <h5>Recherche de livres par nom d'Auteur.e</h5>

        <form class="formConnexAjout" method="post" action="traitementRechercheAuteur.php">

            <div class="formDiv">
                <label class="labelForm" for="nom"></label>
                <input class="form" required="required" placeholder="Nom" type="text" name="lettre" />
            </div>

            <div class="connexButtonDiv">
                <button type="submit" class="btnC">Chercher</button>
            </div>

        </form>


        <?php

     // connexion à la BDD 'BDP5' avec ==> 'nom du serveur', 'nom utilisateur', 'mdp','nom BDD'
 $connex = mysqli_connect('localhost', 'root', '', 'BDP5');

//  if (!$connex) {
//      echo "<script type=text/javascript>";
//      echo "alert('Connexion impossible a la base de données')</script>";
//  } 

//  // si connexion fonctionne alors les données du formulaire sont transmises à la BDD
//  else {
//      echo "<script type=text/javascript>";
//      echo "alert('Connexon a la base de données reussie')</script>";

        $NomAuteur = $_POST["nom"];
        $lettre = $_POST['lettre'];

        $requete = "SELECT * FROM livres WHERE Nom_Auteur like '$lettre%'";
        $result = mysqli_query($connex, $requete);

            // creation d'une table pour afficher les données de la BDD
            echo '<div class="divTableRecherche">';
            echo '<table class="table">';

            while ($donnees = mysqli_fetch_array($result)) {

                echo '<tr class="value">';
                echo '<th>' . 'Id  ' . '</th>';
                echo '<td>' . $donnees[0] . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'ISBN  ' . '</th>';
                echo '<td>' . $donnees[1] . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th >' . 'Titre  ' . '</th>';
                echo '<td class="titreTd">' . $donnees[2] . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Thème  ' . '</th>';
                echo '<td>' . $donnees[3] . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Nombre de page  ' . '</th>';
                echo '<td>' . $donnees[4] . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Format  ' . '</th>';
                echo '<td>' . $donnees[5] . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Nom Auteur  ' . '</th>';
                echo '<td>' . $donnees[6] . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Prénom Auteur  ' . '</th>';
                echo '<td>' . $donnees[7] . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Éditeur  ' . '</th>';
                echo '<td>' . $donnees[8] . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Année d\'édition' . '</th>';
                echo '<td>' . $donnees[9] . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Prix  ' . '</th>';
                echo '<td>' . $donnees[10] . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Langue  ' . '</th>';
                echo '<td>' . $donnees[11] . '</td>';
                echo '</tr>';

                // echo '<tr class="value">';
                // echo '<th>' . 'Modifier  ' . '</th>';
                // echo '<td>' . "<a href='formEdit.php?id= " . $donnees[0] . "'><img src='images/edit.png'></a>" . '</td>';
                // echo '</tr>';

                // echo '<tr class="value">';
                // echo '<th>' . 'Supprimer  ' . '</th>';
                // echo '<td>' . "<a href='delete.php?id=" . $donnees[0] . "'><img src='images/delete.png'></a>" . '</td>';
                // echo '</tr>';

                echo '<tr class="espace"></tr>';
            }
            echo '</table>';
            echo '</div>';
        
       // cloture de la connexion à la BDD
mysqli_close($connex);

        ?>
        <?php
        include "footer.php";
        ?>
        
    </div>

</body>

</html>