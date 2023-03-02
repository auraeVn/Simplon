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

        try {

            $bd = new PDO('mysql:host=localhost;dbname=BDP5', 'root', '');
            $bd->query("SET NAMES 'utf8'");
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $requete = $bd->prepare('SELECT DISTINCT raison_sociale FROM fournisseurs ORDER BY raison_sociale ');
            $requete->execute();
        ?>

            <form class="formConnexAjout" method="post" action="traitementRechercheFournisseurs.php">

                <div class="formDiv2">
                    <label class="labelForm" for="nom">Recherche de fournisseur par nom</label><br>
                    <?php
                    echo '<select class="form" required="required" placeholder="Nom" type="text" name="fournisseur">';
                    while ($obj = $requete->fetch(PDO::FETCH_OBJ)) {
                        echo '<option value="' . $obj->raison_sociale . '">' . $obj->raison_sociale . '</option>';
                    }
                    echo '</select>';
                    ?>

                </div>

                <!--  select distinct editeur from livres et aussi un autre requete select * from livres where editeur = gallimard -->

                <div class="connexButtonDiv">
                    <button type="submit" class="btnC">Chercher</button>
                </div>

            </form>

        <?php


        } catch (PDOException $e) {
            die('<p> Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        ?>

        <!-- TRAITEMENT FORMULAIRE -->

        <?php

        $Id = $_GET['id'];
        $fournisseur = $_POST['fournisseur'];

        try {

            $requete = $bd->prepare("SELECT * FROM fournisseurs WHERE raison_sociale = '$fournisseur'");
            $requete->execute();

            echo '<div class="divTable1">';
            echo '<table>';
           
            while ($obj = $requete->fetch(PDO::FETCH_OBJ)) {
               
                echo '<tr class="value">';
                echo '<th>' . 'Id  ' . '</th>';
                echo '<td>' . $obj->Id_fournisseurs . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'ISBN  ' . '</th>';
                echo '<td>' . $obj->code_fournisseurs . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Titre  ' . '</th>';
                echo '<td class="titreTd">' . $obj->raison_sociale . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Thème  ' . '</th>';
                echo '<td>' . $obj->rue_fournisseurs . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Nombre de page  ' . '</th>';
                echo '<td>' . $obj->code_postal . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Format  ' . '</th>';
                echo '<td>' . $obj->localite . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Nom Auteur  ' . '</th>';
                echo '<td>' . $obj->pays . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Prénom Auteur  ' . '</th>';
                echo '<td>' . $obj->tel_fournisseurs . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Éditeur  ' . '</th>';
                echo '<td>' . $obj->url_fournisseurs . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Année d\'édition' . '</th>';
                echo '<td>' . $obj->email_fournisseurs . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Prix  ' . '</th>';
                echo '<td>' . $obj->fax_fournisseurs . '</td>';
                echo '</tr>';


                echo '<tr class="value">';
                echo '<th>' . 'Modifier  ' . '</th>';
                echo '<td>' . "<a href='formEdit.php?id= " . $obj->Id_fournisseurs . "'><img src='images/edit.png'></a>" . '</td>';
                echo '</tr>';

                echo '<tr class="value">';
                echo '<th>' . 'Supprimer  ' . '</th>';
                echo '<td>' . "<a href='deleteFournisseurs.php?id=" . $obj->Id_fournisseurs . "'><img src='images/delete.png'></a>" . '</td>';
                echo '</tr>';

                echo '<tr class="espace"></tr>';
            }
            echo '</table>';
            echo '</div>';


            // TABLE MEDIA QUERIES @media screen and (min-width: 900px)

            echo '<div class="divTableScreen">';
            $requete = $bd->prepare("SELECT * FROM fournisseurs WHERE raison_sociale = '$fournisseur'");
            $requete->execute();
         
            echo '<table class="table">';

            echo '<thead>';
            echo '<tr class="key">';
            echo '<td>' . 'Id  ' . '</td>';
            echo '<td>' . 'Code ' . '</td>';
            echo '<td>' . 'Raison Sociale ' . '</td>';
            echo '<td>' . 'Adresse ' . '</td>';
            echo '<td>' . 'Code postal ' . '</td>';
            echo '<td>' . 'localite ' . '</td>';
            echo '<td>' . 'Pays ' . '</td>';
            echo '<td>' . 'Télephone ' . '</td>';
            echo '<td>' . 'Site ' . '</td>';
            echo '<td>' . 'Email ' . '</td>';
            echo '<td>' . 'Fax ' . '</td>';
            echo '<td>' . 'Modifier ' . '</td>';
            echo '<td>' . 'Supprimer ' . '</td>';
            echo '</tr>';
            echo '</thead>';

            while ($obj = $requete->fetch(PDO::FETCH_OBJ)) {

                echo '<tbody>';
                echo '<tr class="value">';
                echo '<td>' . $obj->Id_fournisseurs . '</td>';
                echo '<td>' . $obj->code_fournisseurs . '</td>';
                echo '<td class="titreTd">' . $obj->raison_sociale . '</td>';
                echo '<td>' . $obj->rue_fournisseurs . '</td>';
                echo '<td>' . $obj->code_postal . '</td>';
                echo '<td>' . $obj->localite  . '</td>';
                echo '<td>' . $obj->pays . '</td>';
                echo '<td>' . $obj->tel_fournisseurs . '</td>';
                echo '<td>' . $obj->url_fournisseurs . '</td>';
                echo '<td>' . $obj->email_fournisseurs . '</td>';
                echo '<td>' . $obj->fax_fournisseurs . '</td>';
               
                echo '<td class="supp">' . "<a href='formEditFournisseurs.php? id=" . $obj->Id_fournisseurs . "'> <img src='images/edit.png'></a>" . '</td>';
                echo '<td class="supp">' . "<a href='deleteFournisseurs.php? id=" . $obj->Id_fournisseurs . "'> <img src='images/delete.png'></a>" . '</td>';
              
                echo '</tr>';
                echo '</tbody>';
            }
            echo '</table>';
            echo '</div>';

        } catch (PDOException $e) {
            die('<p> Erreur[' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }

        ?>
        <?php
        include "footer.php";
        ?>

    </div>

</body>

</html>