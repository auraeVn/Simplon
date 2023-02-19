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
        <h1><a href="indexConnex.php">Bibliothèque du Cloître</a></h1>
        <?php include "header.php" ?>
        <h5>Consultation</h5>

        <?php

        $connex = mysqli_connect('localhost', 'root', '', 'BDP5');


        $requete = " SELECT * FROM Livres";
        $result = mysqli_query($connex, $requete);
        
        echo '<div class="divTable1">';
        echo '<table>';

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
            echo '<th>' . 'Titre  ' . '</th>';
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

            echo '<tr class="value">';
            echo '<th>' . 'Modifier  ' . '</th>';
            echo '<td>' . "<a href='formEdit.php?id= " . $donnees[0] . "'><img src='images/edit.png'></a>" . '</td>';
            echo '</tr>';

            echo '<tr class="value">';
            echo '<th>' . 'Supprimer  ' . '</th>';
            echo '<td>' . "<a href='delete.php?id=" . $donnees[0] . "'><img src='images/delete.png'></a>" . '</td>';
            echo '</tr>';

            echo '<tr class="espace"></tr>';
        }
        echo '</table>';
        echo '</div>';
    

        // TABLE MEDIA QUERIES @media screen and (min-width: 900px)

        echo '<div class="divTableScreen">';
        $requete = " SELECT * FROM Livres";
        $result = mysqli_query($connex, $requete);
        echo '<table class="table">';

        echo '<thead>';
        echo '<tr class="key">';
        echo '<td>' . 'Id  ' . '</td>';
        echo '<td>' . 'ISBN ' . '</td>';
        echo '<td>' . 'Titre ' . '</td>';
        echo '<td>' . 'Thème ' . '</td>';
        echo '<td>' . 'Nombre de pages ' . '</td>';
        echo '<td>' . 'format ' . '</td>';
        echo '<td>' . 'Nom Auteur ' . '</td>';
        echo '<td>' . 'Prenom Auteur ' . '</td>';
        echo '<td>' . 'Editeur ' . '</td>';
        echo '<td>' . 'Année d\'édition ' . '</td>';
        echo '<td>' . 'Prix ' . '</td>';
        echo '<td>' . 'Langue ' . '</td>';
        echo '<td>' . 'Modifier ' . '</td>';
        echo '<td>' . 'Supprimer ' . '</td>';
        echo '</tr>';
        echo '</thead>';

        while ($donnees = mysqli_fetch_array($result)) {

            echo '<tbody>';
            echo '<tr class="value">';
            echo '<td>' . $donnees[0] . '</td>';
            echo '<td>' . $donnees[1] . '</td>';
            echo '<td class="titreTd">' . $donnees[2] . '</td>';
            echo '<td>' . $donnees[3] . '</td>';
            echo '<td>' . $donnees[4] . '</td>';
            echo '<td>' . $donnees[5] . '</td>';
            echo '<td>' . $donnees[6] . '</td>';
            echo '<td>' . $donnees[7] . '</td>';
            echo '<td>' . $donnees[8] . '</td>';
            echo '<td>' . $donnees[9] . '</td>';
            echo '<td>' . $donnees[10] . '</td>';
            echo '<td>' . $donnees[11] . '</td>';
            echo '<td class="supp">' . "<a href='formEdit.php?id= " . $donnees[0] . "'><img src='images/edit.png'></a>" . '</td>';
            echo '<td class="supp">' . "<a href='delete.php?id=" . $donnees[0] . "'><img src='images/delete.png'></a>" . '</td>';

            echo '</tr>';
            echo '</tbody>';
        }
        echo '</table>';
        echo '</div>';

        include "footer.php";

        mysqli_close($connex);
        ?>

    </div>
</body>

</html>