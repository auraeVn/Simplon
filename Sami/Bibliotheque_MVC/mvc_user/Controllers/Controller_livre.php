<?php

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



}
