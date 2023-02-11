<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <?php
    session_start();
    echo "bonjour" . " " . $_SESSION['prenom'];
    ?>
        <!-- Header avec deux boutons et un menu déroulant avec Bootstrap -->
        <header style="display:flex">
        
            <button type="button" class="btn btn-secondary"><a class="dropdown-item" href="deconnexion.php">Déconnexion</a></button>
            
                <button type="button" class="btn btn-secondary"><a class="dropdown-item" href="indexConnex.php">Accueil</a></button>
                <div class="dropdown">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">Livres</button>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" href="affichageLivres.php">Afficher les livres</a></li>
                        <li> <a class="dropdown-item" href="ajoutLivre.php">Ajouter un livre</a></li>
                        <li> <a class="dropdown-item" href="formRechercheAuteur.php">Recherche par Auteur.e</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-secondary"><a class="dropdown-item" href="formInscription.php">Inscription</a></button>
                
        </header>

    </div>
</body>

</html>