a<?php

class Controller_livre extends Controller
{
    public function action_default()
    {
        $this->action_livre();
    }

    public function action_livre()
    {
        $this->render("livre");
    }


    public function action_all_livres()
    {
        $m = Model::get_model();
        $data = ["livres" => $m->get_all_livres()];
        $this->render("all_livres", $data);
    }



    // AJOUT LIVRE // 

    public function action_ajout_livres()
    {
        $this->render("ajout_livres");
    }

    public function action_ajout_all_livres()
    {
        $m = Model::get_model();
        $Isbn = trim($_POST["Isbn"]);   // trim() permet de supprimer les espaces avant et après le mot saisi
        $titre = trim($_POST["titre"]);
        $theme = trim($_POST["theme"]);
        $pages = trim($_POST["pages"]);
        $format = trim($_POST["format"]);
        $nom = trim($_POST["nom"]);
        $prenom = trim($_POST["prenom"]);
        $editeur = trim($_POST["editeur"]);
        $annee = trim($_POST["annee"]);
        $prix = trim($_POST["prix"]);
        $langue = trim($_POST["langue"]);
        $data = [
            "ajoutAllLivres" => $m->get_ajout_all_livres($Isbn, $titre, $theme, $pages, $format, $nom, $prenom, $editeur, $annee, $prix, $langue),
            "livres" => $m->get_all_livres()
        ];
        $this->render("all_livres", $data);
    }


    // PAR AUTEUR // 


    public function action_auteur_livres()
    {
        $m = Model::get_model();
        $data = ["auteurs" => $m->get_auteur_livres()];
        $this->render("auteur_livres", $data);
    }

    public function action_auteur_all_livres()
    {
        $m = Model::get_model();
        $auteur = $_POST["auteur"];
        $data = [
            "auteurs" => $m->get_auteur_livres(),
            "livresauteur" => $m->get_auteur_all_livres($auteur)
        ];
        $this->render("auteur_livres", $data);
        $this->render("auteur_all_livres", $data);
    }

    // PAR TITRE // 

    public function action_titre_livres()
    {
        $m = Model::get_model();
        $data = ["titres" => $m->get_titre_livres()];
        $this->render("titre_livres", $data);
    }

    public function action_titre_all_livres()
    {
        $m = Model::get_model();
        $titre = $_POST["titre"];
        $data = [
            "titres" => $m->get_titre_livres(),
            "livresTitres" => $m->get_titre_all_livres($titre)
        ];
        $this->render("titre_livres", $data);
        $this->render("titre_all_livres", $data);
    }

    // PAR EDITEUR // 

    public function action_editeur_livres()
    {
        $m = Model::get_model();
        $data = ["editeurs" => $m->get_editeur_livres()];
        $this->render("editeur_livres", $data);
    }

    public function action_editeur_all_livres()
    {
        $m = Model::get_model();
        $editeur = $_POST["editeur"];
        $data = [
            "editeurs" => $m->get_editeur_livres(),
            "livresEditeurs" => $m->get_editeur_all_livres($editeur)
        ];
        $this->render("editeur_livres", $data);
        $this->render("editeur_all_livres", $data);
    }



    // MODIFIER LIVRE //


    public function action_modifier_livres()
    {
        $m = Model::get_model();
        $Id = $_GET['id'];
        $data = ["ModifiersLivres" => $m->get_modifier_livres($Id)];
        $this->render("modifier_livres", $data);
    }

    public function action_traitement_modifier_livres()
    {
        $m = Model::get_model();

        $Isbn = trim($_POST["Isbn"]);   
        $titre = trim($_POST["titre"]);
        $theme = trim($_POST["theme"]);
        $pages = trim($_POST["pages"]);
        $format = trim($_POST["format"]);
        $nom = trim($_POST["nom"]);
        $prenom = trim($_POST["prenom"]);
        $editeur = trim($_POST["editeur"]);
        $annee = trim($_POST["annee"]);
        $prix = trim($_POST["prix"]);
        $langue = trim($_POST["langue"]);

        $Id = $_GET['id'];
        $data = ["traitementsModifierLivres" => $m->get_traitement_modifier_livres($Id,$Isbn, $titre, $theme, $pages, $format, $nom, $prenom, $editeur, $annee, $prix, $langue),];

        $this->render("all_livres", $data);
    }


    // SUPPRIMER LIVRE //

    public function action_supprimer_livres()
    {
        $m = Model::get_model();
        $Id = $_GET['id'];
        $data = ["SupprimerLivres" => $m->get_supprimer_livres($Id),
        "livres" => $m->get_all_livres()
     ];

        $this->render("all_livres", $data);
    }
}
