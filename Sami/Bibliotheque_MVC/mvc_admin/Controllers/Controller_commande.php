<?php

class Controller_commande extends Controller
{
    public function action_default()
    {
        $this->action_commande();
    }

    public function action_commande()
    {
        $this->render("commande");
    }

    public function action_all_commandes()
    {
        $m = Model::get_model();
        $data = ["commandes" => $m->get_all_commandes()];
        $this->render("all_commandes", $data);
    }



    // AJOUT COMMANDE // 

    public function action_ajout_commandes_titres()
    {
        $m = Model::get_model();
        $data = [
            "ajout_commandes_titres" => $m->get_ajout_commandes_titres(),
            "ajout_commandes_raison_sociale" => $m->get_ajout_commandes_raison_sociale()
        ];
        $this->render("ajout_commandes", $data);
    }


    public function action_ajout_all_commandes()
    {
        $m = Model::get_model();
        $titre = trim($_POST["titre"]);   // trim() permet de supprimer les espaces avant et après le mot saisi
        $rsf = trim($_POST["rsf"]);
        $date = trim($_POST["date"]);
        $prix = trim($_POST["prix"]);
        $nbrExemplaires = trim($_POST["nbrExemplaires"]);
        // var_dump($titre,$rsf,$date,$prix,$nbrExemplaires);

        $data = [
            "ajoutAllCommandes" => $m->get_ajout_all_commandes($titre, $rsf, $date, $prix, $nbrExemplaires),
            "commandes" => $m->get_all_commandes()
        ];

        $this->action_all_commandes();
    }





    // PAR EDITEUR // 


    public function action_commande_editeurs()
    {
        $m = Model::get_model();
        $data = ["commandesEditeurs" => $m->get_commande_editeurs()];
        $this->render("commande_editeurs", $data);
    }


    public function action_commande_all_editeurs()
    {
        $m = Model::get_model();
        $editeur = $_POST["editeur"];
        $data = [
            "commandesAllEditeurs" => $m->get_commande_all_editeurs($editeur),
            "commandesEditeurs" => $m->get_commande_editeurs()
        ];
        $this->render("commande_editeurs", $data);
        $this->render("commande_all_editeurs", $data);
    }


    // PAR TITRE // 


    public function action_commande_titres()
    {
        $m = Model::get_model();
        $data = ["commandesTitres" => $m->get_commande_titres()];
        $this->render("commande_titres", $data);
    }


    public function action_commande_all_titres()
    {
        $m = Model::get_model();
        $titre = $_POST["titre"];
        $data = [
            "commandesAllTitres" => $m->get_commande_all_titres($titre),
            "commandesTitres" => $m->get_commande_titres()
        ];
        $this->render("commande_titres", $data);
        $this->render("commande_all_titres", $data);
    }



    // PAR DATE // 

    public function action_commande_dates()
    {
        $m = Model::get_model();
        $data = ["commandesDates" => $m->get_commande_dates()];
        $this->render("commande_dates", $data);
    }


    public function action_commande_all_dates()
    {
        $m = Model::get_model();
        $date = $_POST["date"];
        $data = [
            "commandesAllDates" => $m->get_commande_all_dates($date),
            "commandesDates" => $m->get_commande_dates()
        ];
        $this->render("commande_dates", $data);
        $this->render("commande_all_dates", $data);
    }
}
