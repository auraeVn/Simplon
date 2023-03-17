<?php

class Model
{   // Début de la Classe

    private $bd;

    private static $instance = null;

    /*
         * Constructeur créant l'objet PDO et l'affectant à $bd
         */
    private function __construct()
    {  // Fonction qui sert à faire le lien avec la BDD

        $dsn = "mysql:host=localhost;dbname=BDP5";   // Coordonnées de la BDD
        $login = "root";   // Identifiant d'accès à la BDD
        $mdp = ""; // Mot de passe d'accès à la BDD
        $this->bd = new PDO($dsn, $login, $mdp);
        $this->bd->query("SET NAMES 'utf8'");
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    // get_model()

    public static function get_model()
    {    // Fonction qui sert à créer une instance de Model pour l'appeler dans chaque Controller (équivalent de $connex)
        if (is_null(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }



    // CONNEXION // 

    public function get_traitement_connexion($email, $mdp)
    {
        $r = $this->bd->prepare("SELECT * FROM `userLivres` WHERE `email` = :email AND `mdp` = :mdp");
        $r->bindValue(':email', $email);
        $r->bindValue(':mdp', $mdp);
        $r->execute();

        return $r->fetch(PDO::FETCH_OBJ);
    }


    // INSCRIPTION // 

    public function get_traitement_inscription($nom, $prenom, $email, $mdp)
    {
        $r = $this->bd->prepare("INSERT INTO `userLivres` (nom, prenom, email, mdp) VALUES (:nom, :prenom, :email, :mdp)");
        $r->bindValue(':nom', $nom);
        $r->bindValue(':prenom', $prenom);
        $r->bindValue(':email', $email);
        $r->bindValue(':mdp', $mdp);
        $r->execute();

        return $r->fetch(PDO::FETCH_OBJ);
    }

}   


// Fin de la Classe