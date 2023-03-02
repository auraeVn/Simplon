<!DOCTYPE html>
<html lang="fr">

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
         $role = $_SESSION['role'];
        try {

            $bd = new PDO('mysql:host=localhost;dbname=BDP5', 'root', '');
            $bd->query("SET NAMES 'utf8'");
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // on termine le script en affichant le code de l'erreur et le message
            die('<p> Echec de connexion. Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        try {
            $requete = $bd->prepare('SELECT * FROM Livres');
            $requete->execute();
            $obj = $requete->fetch(PDO::FETCH_OBJ);

            echo '<div class="divTable1">';
            echo '<table>';

            while ($obj = $requete->fetch(PDO::FETCH_OBJ)) {

                echo '<tr class="value">';
                echo '<th>' . 'Id  ' . '</th>';
                echo '<td>' . $obj->Id . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'ISBN  ' . '</th>';
                echo '<td>' . '<a href="" class="isbn">' . $obj->ISBN . '</a>'. '</td>';
                echo '</tr>';
                
                echo '<tr class="value">';
                echo '<th>' . 'Titre  ' . '</th>';
                echo '<td class="titreTd">' . $obj->Titre . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Thème  ' . '</th>';
                echo '<td>' . $obj->Theme . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Nombre de page  ' . '</th>';
                echo '<td>' . $obj->Nombre_de_pages . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Format  ' . '</th>';
                echo '<td>' . $obj->Format . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Nom Auteur  ' . '</th>';
                echo '<td>' . $obj->Nom_Auteur . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Prénom Auteur  ' . '</th>';
                echo '<td>' . $obj->Prenom_Auteur . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Éditeur  ' . '</th>';
                echo '<td>' . $obj->Editeur . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Année d\'édition' . '</th>';
                echo '<td>' . $obj->Annee_edition . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Prix  ' . '</th>';
                echo '<td>' . $obj->Prix . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Langue  ' . '</th>';
                echo '<td>' . $obj->Langue . '</td>';
                echo '</tr>';

                if ($role == "admin"){ 
                echo '<tr class="value">';
                echo '<th>' . 'Modifier  ' . '</th>';
                echo '<td>' . "<a href='formEdit.php?id= " . $obj->Id . "'><img src='images/edit.png'></a>" . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Supprimer  ' . '</th>';
                echo '<td>' . "<a href='delete.php?id=" . $obj->Id . "'><img src='images/delete.png'></a>" . '</td>';
                echo '</tr>';
                };

                echo '<tr class="espace"></tr>';
            }
            echo '</table>';
            echo '</div>';


            // TABLE MEDIA QUERIES @media screen and (min-width: 900px)

            echo '<div class="divTableScreen">';
            $requete = $bd->prepare('SELECT * FROM Livres');
            $requete->execute();
            $obj = $requete->fetch(PDO::FETCH_OBJ);
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

            if ($role == "admin"){ 
            echo '<td>' . 'Modifier ' . '</td>';
            echo '<td>' . 'Supprimer ' . '</td>';
            };

            echo '</tr>';
            echo '</thead>';

            while ($obj = $requete->fetch(PDO::FETCH_OBJ)) {

                echo '<tbody>';
                echo '<tr class="value">';
                echo '<td>' . $obj->Id . '</td>';
                echo '<td>' . '<a href="" class="isbn">' . $obj->ISBN . '</a>' . '</td>';
                echo '<td class="titreTd">' . $obj->Titre . '</td>';
                echo '<td>' . $obj->Theme . '</td>';
                echo '<td>' . $obj->Nombre_de_pages . '</td>';
                echo '<td>' . $obj->Format  . '</td>';
                echo '<td>' . $obj->Nom_Auteur . '</td>';
                echo '<td>' . $obj->Prenom_Auteur . '</td>';
                echo '<td>' . $obj->Editeur . '</td>';
                echo '<td>' . $obj->Annee_edition . '</td>';
                echo '<td>' . $obj->Prix . '</td>';
                echo '<td>' . $obj->Langue . '</td>';

                if ($role == "admin"){ 
                echo '<td class="supp">' . "<a href='formEdit.php?id= " . $obj->Id . "'><img src='images/edit.png'></a>" . '</td>';
                echo '<td class="supp">' . "<a href='delete.php?id=" . $obj->Id . "'><img src='images/delete.png'></a>" . '</td>';
                };

                echo '</tr>';
                echo '</tbody>';
            }
            echo '</table>';
            echo '</div>';

        } catch (PDOException $e) {
            die('<p> Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        include "footer.php";

        ?>

    </div>
</body>

</html>