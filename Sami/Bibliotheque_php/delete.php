    <?php

    $connex = mysqli_connect('localhost', 'root', '', 'BDP5');

    $id = $_GET['id'];
    if (!$connex) {
        // si connexion échoue
        echo "<script type=text/javascript>";
        echo "alert('Connexion impossible a la base de données')</script>";
    } else {
        // Si connexion fonctionne
        echo "<script type=text/javascript>";
        echo "alert('Connexion a la base de données réussie')</script>";

        $requete = "DELETE FROM Livres WHERE  Id = '$id'";

        //$result = mysqli_query($connect, $sql);
        $result = mysqli_query($connex, $requete);
        
        if ($result) {
            header("Location: affichageLivres.php");
        } else {
            echo "Erreur lors de la suppression : " . mysqli_error($connex);
        }

    }
   
    mysqli_close($connex);
    ?>

