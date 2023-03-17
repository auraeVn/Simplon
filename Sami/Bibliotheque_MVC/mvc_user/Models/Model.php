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





    // LIVRES // 

    public function get_all_livres()
    {

        $r = $this->bd->prepare("SELECT * FROM Livres order by Titre");
        $r->execute();

        return $r->fetchAll(PDO::FETCH_OBJ);
    }


    // LIVRES PAR AUTEUR //  // LIVRES PAR AUTEUR //  // LIVRES PAR AUTEUR // 

    public function get_auteur_livres()
    {
        $r = $this->bd->prepare("SELECT DISTINCT Nom_Auteur FROM Livres order by Nom_Auteur");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_auteur_all_livres($auteur)
    {
        $r = $this->bd->prepare("SELECT * FROM Livres WHERE Nom_Auteur = '$auteur'");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }


    // LIVRES PAR TITRE //  // LIVRES PAR TITRE //  // LIVRES PAR TITRE // 

    public function get_titre_livres()
    {
        $r = $this->bd->prepare("SELECT DISTINCT Titre FROM Livres order by Titre");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_titre_all_livres($titre)
    {
        $r = $this->bd->prepare("SELECT * FROM Livres WHERE Titre = '$titre'");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }


    // LIVRES PAR EDITEUR // // LIVRES PAR EDITEUR // // LIVRES PAR EDITEUR // 

    public function get_editeur_livres()
    {
        $r = $this->bd->prepare("SELECT DISTINCT Editeur FROM Livres order by Editeur");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_editeur_all_livres($editeur)
    {
        $r = $this->bd->prepare("SELECT * FROM Livres WHERE Editeur = '$editeur'");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }





    // ALL FOURNISSEURS // 

    public function get_all_fournisseurs()
    {

        $r = $this->bd->prepare("SELECT * FROM fournisseurs order by raison_sociale");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }


    // FOURNISSEURS PAR RAISON SOCIALE //

    public function get_raison_sociale_fournisseurs()
    {
        $r = $this->bd->prepare("SELECT DISTINCT raison_sociale FROM fournisseurs ORDER BY raison_sociale");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_raison_sociale_all_fournisseurs($fournisseur)
    {
        $r = $this->bd->prepare("SELECT * FROM fournisseurs WHERE raison_sociale = '$fournisseur'");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }


    // FOURNISSEURS PAR LOCALITE //


    public function get_localite_fournisseurs()
    {
        $r = $this->bd->prepare("SELECT DISTINCT localite FROM fournisseurs ORDER BY localite");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_localite_all_fournisseurs($localite)
    {
        $r = $this->bd->prepare("SELECT * FROM fournisseurs WHERE localite = '$localite'");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }



    // FOURNISSEURS PAR PAYS //

    public function get_pays_fournisseurs()
    {
        $r = $this->bd->prepare("SELECT DISTINCT pays FROM fournisseurs ORDER BY pays");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_pays_all_fournisseurs($pays)
    {
        $r = $this->bd->prepare("SELECT * FROM fournisseurs WHERE pays = '$pays'");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }



}   


// Fin de la Classe