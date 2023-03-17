<?php

class Controller_fournisseur extends Controller
{
    public function action_default()
    {
        $this->action_fournisseur();
    }

    public function action_fournisseur()
    {
        $this->render("fournisseur");
    }


    public function action_all_fournisseurs()
    {
        $m = Model::get_model();
        $data = ["fournisseurs" => $m->get_all_fournisseurs()];
        $this->render("all_fournisseurs", $data);
    }



    // AJOUT FOUNRISSEUR // 

    public function action_ajout_fournisseurs()
    {
        $this->render("ajout_fournisseurs");
    }

    public function action_ajout_all_fournisseurs()
    {
        $m = Model::get_model();
        $code = trim($_POST["code"]);   // trim() permet de supprimer les espaces avant et après le mot saisi
        $RS = trim($_POST["RS"]);
        $adresse = trim($_POST["adresse"]);
        $CP = trim($_POST["CP"]);
        $localite = trim($_POST["localite"]);
        $pays = trim($_POST["pays"]);
        $tel = trim($_POST["tel"]);
        $website = trim($_POST["website"]);
        $email = trim($_POST["email"]);
        $fax = trim($_POST["fax"]);
        $data = [
            "ajoutAllFournisseurs" => $m->get_ajout_all_fournisseurs($code,$RS,$adresse,$CP,$localite,$pays,$tel,$website,$email,$fax),
            "fournisseurs" => $m->get_all_fournisseurs()
        ];

        $this->render("all_fournisseurs", $data);
    }

    // PAR RAISON SOCIALE // 

    public function action_raison_sociale_fournisseurs()
    {
        $m = Model::get_model();
        $data = ["fournisseurs" => $m->get_raison_sociale_fournisseurs()];
        $this->render("raison_sociale_fournisseurs", $data);
    }

    public function action_raison_sociale_all_fournisseurs()
    {
        $m = Model::get_model();
        $fournisseur = $_POST["fournisseur"];
        $data = ["raisonSocialeFournisseurs" => $m->get_raison_sociale_all_fournisseurs($fournisseur)];
        $this->render("raison_sociale_all_fournisseurs", $data);
    }

    // PAR LOCALITE // 

    public function action_localite_fournisseurs()
    {
        $m = Model::get_model();
        $data = ["localites" => $m->get_localite_fournisseurs()];
        $this->render("localite_fournisseurs", $data);
    }

    public function action_localite_all_fournisseurs()
    {
        $m = Model::get_model();
        $localite = $_POST["localite"];
        $data = [
            "localiteFournisseurs" => $m->get_localite_all_fournisseurs($localite),
            "localites" => $m->get_localite_fournisseurs()
        ];
        $this->render("localite_fournisseurs", $data);
        $this->render("localite_all_fournisseurs", $data);
    }

    // PAR PAYS //

    public function action_pays_fournisseurs()
    {
        $m = Model::get_model();
        $data = ["pays" => $m->get_pays_fournisseurs()];
        $this->render("pays_fournisseurs", $data);
    }

    public function action_pays_all_fournisseurs()
    {
        $m = Model::get_model();
        $pays = $_POST["pays"];
        $data = [
            "paysFournisseurs" => $m->get_pays_all_fournisseurs($pays),
            "pays" => $m->get_pays_fournisseurs()
        ];
        $this->render("pays_fournisseurs", $data);
        $this->render("pays_all_fournisseurs", $data);
    }
}
