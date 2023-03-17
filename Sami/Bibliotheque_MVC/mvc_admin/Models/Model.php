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



    // AJOUTER LIVRE // 


    public function get_ajout_all_livres($Isbn, $titre, $theme, $pages, $format, $nom, $prenom, $editeur, $annee, $prix, $langue)
    {
        $r = $this->bd->prepare("INSERT INTO Livres (ISBN, Titre, Theme, Nombre_de_pages, Format, Nom_Auteur, Prenom_Auteur, Editeur, Annee_edition, Prix, Langue)
        VALUES(:Isbn, :titre, :theme, :pages, :format, :nom, :prenom, :editeur, :annee, :prix, :langue)");

        $r->bindValue(':Isbn', $Isbn);
        $r->bindValue(':titre', $titre);
        $r->bindValue(':theme', $theme);
        $r->bindValue(':pages', $pages);
        $r->bindValue(':format', $format);
        $r->bindValue(':nom', $nom);
        $r->bindValue(':prenom', $prenom);
        $r->bindValue(':editeur', $editeur);
        $r->bindValue(':annee', $annee);
        $r->bindValue(':prix', $prix);
        $r->bindValue(':langue', $langue);

        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
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


    // MODIFIER LIVRES //

    public function get_modifier_livres($Id)
    {
        $r = $this->bd->prepare("SELECT * FROM Livres WHERE Id=$Id");
        $r->execute();
        return $r->fetch(PDO::FETCH_OBJ);
    }

    public function get_traitement_modifier_livres($Id, $Isbn, $titre, $theme, $pages, $format, $nom, $prenom, $editeur, $annee, $prix, $langue)
    {
        $r = $this->bd->prepare("UPDATE Livres SET ISBN='$Isbn', Titre='$titre',Theme='$theme',Nombre_de_pages='$pages',Format='$format',
        Nom_Auteur='$nom', Prenom_Auteur='$prenom', 
        Editeur='$editeur', Annee_edition='$annee', Prix='$prix', Langue='$langue' WHERE Id = '$Id'");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }


    // SUPPRIMER LIVRE //

    public function get_supprimer_livres($Id)
    {
        $r = $this->bd->prepare("DELETE FROM Livres WHERE  Id = $Id");
        $r->execute();
        return $r->fetch(PDO::FETCH_OBJ);
    }



    // ALL FOURNISSEURS // 

    public function get_all_fournisseurs()
    {

        $r = $this->bd->prepare("SELECT * FROM fournisseurs order by raison_sociale");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }



    // AJOUTER FOURNISSEUR //

    public function get_ajout_all_fournisseurs($code, $RS, $adresse, $CP, $localite, $pays, $tel, $website, $email, $fax)
    {
        $r = $this->bd->prepare("INSERT INTO fournisseurs (code_fournisseurs, raison_sociale, rue_fournisseurs, code_postal, localite, pays, tel_fournisseurs, url_fournisseurs, email_fournisseurs, fax_fournisseurs)
                   VALUES(:code, :RS, :adresse, :CP, :localite, :pays, :tel, :website, :email, :fax)");

        $r->bindValue(':code', $code);
        $r->bindValue(':RS', $RS);
        $r->bindValue(':adresse', $adresse);
        $r->bindValue(':CP', $CP);
        $r->bindValue(':localite', $localite);
        $r->bindValue(':pays', $pays);
        $r->bindValue(':tel', $tel);
        $r->bindValue(':website', $website);
        $r->bindValue(':email', $email);
        $r->bindValue(':fax', $fax);

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



    // COMMANDE // 

    public function get_all_commandes()
    {
        $r = $this->bd->prepare("SELECT commandes.*, Livres.ISBN, Livres.Nom_Auteur, Livres.Titre, fournisseurs.raison_sociale  FROM commandes
        INNER JOIN fournisseurs ON commandes.Id_fournisseurs = fournisseurs.Id_fournisseurs
        INNER JOIN Livres ON commandes.Id = Livres.Id ORDER BY date_achat");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }



    // COMMANDES PAR EDITEURS //

    public function get_commande_editeurs()
    {
        $r = $this->bd->prepare("SELECT L.Editeur, C.Id  FROM commandes C
          INNER JOIN Livres L ON C.Id = L.Id ORDER BY Editeur");

        // ("SELECT DISTINCT pays FROM fournisseurs ORDER BY pays");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_commande_all_editeurs($editeur)
    {
        $r = $this->bd->prepare("SELECT C.*, L.ISBN, L.Titre, L.Nom_Auteur, F.raison_sociale FROM commandes C
          INNER JOIN fournisseurs F ON C.Id_fournisseurs = F.Id_fournisseurs
          INNER JOIN Livres L ON C.Id = L.Id WHERE L.Editeur = :editeur
          ORDER BY date_achat");
        $r->bindValue(':editeur', $editeur);

        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }



    // COMMANDES PAR TITRE //

    public function get_commande_titres()
    {
        $r = $this->bd->prepare("SELECT L.Titre, C.Id  FROM commandes C
          INNER JOIN Livres L ON C.Id = L.Id ORDER BY Titre");

        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_commande_all_titres($titre)
    {
        $r = $this->bd->prepare("SELECT C.*, L.ISBN, L.Titre, L.Nom_Auteur, F.raison_sociale FROM commandes C
          INNER JOIN fournisseurs F ON C.Id_fournisseurs = F.Id_fournisseurs
          INNER JOIN Livres L ON C.Id = L.Id WHERE L.Titre = :titre
          ORDER BY date_achat");
        $r->bindValue(':titre', $titre);

        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }



    // COMMANDES PAR AUTEUR  //

    public function get_commande_auteurs()
    {
        $r = $this->bd->prepare("SELECT L.Nom_Auteur, C.Id  FROM commandes C
        INNER JOIN Livres L ON C.Id = L.Id ORDER BY Nom_Auteur");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }


    // COMMANDES PAR RAISON SOCIALE //

    public function get_commande_raison_sociale()
    {
        $r = $this->bd->prepare("SELECT F.raison_sociale, C.Id_fournisseurs  FROM commandes C
        INNER JOIN fournisseurs F ON C.Id_fournisseurs = F.Id_fournisseurs ORDER BY raison_sociale");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }



    // COMMANDES PAR DATE //


    public function get_commande_dates()
    {
        $r = $this->bd->prepare("SELECT * FROM commandes C ORDER BY date_achat");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_commande_all_dates($date)
    {
        $r = $this->bd->prepare("SELECT C.*, L.ISBN, L.Titre, L.Nom_Auteur, F.raison_sociale FROM commandes C
           INNER JOIN fournisseurs F ON C.Id_fournisseurs = F.Id_fournisseurs
           INNER JOIN Livres L ON C.Id = L.Id 
           WHERE C.date_achat = :date
           ORDER BY date_achat");
        $r->bindValue(':date', $date);

        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }



    // AJOUTER COMMANDE //


    public function get_ajout_commandes_titres()
    {
        $r = $this->bd->prepare("SELECT Id, Titre from Livres ORDER BY Titre");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_ajout_commandes_raison_sociale()
    {
        $r = $this->bd->prepare("SELECT Id_fournisseurs, raison_sociale from fournisseurs ORDER BY raison_sociale");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_ajout_all_commandes($titre, $rsf, $date, $prix, $nbrExemplaires)
    {
           $r = $this->bd->prepare("INSERT INTO commandes (Id, Id_fournisseurs, date_achat, prix_achat, nombre_exemplaire) VALUES (:titre, :rsf, :date, :prix, :nbrExemplaires)");

        $r->bindValue(':titre', $titre);
        $r->bindValue(':rsf', $rsf);
        $r->bindValue(':date', $date);
        $r->bindValue(':prix', $prix);
        $r->bindValue(':nbrExemplaires', $nbrExemplaires);

        $r->execute();
        return $r->fetch(PDO::FETCH_OBJ);
    }
}   


// Fin de la Classe