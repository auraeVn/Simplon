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

            $requete = $bd->prepare('SELECT DISTINCT raison_sociale FROM fournisseurs ORDER BY raison_sociale');
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
        include "footer.php";
        ?>
    </div>
</body>

</html>