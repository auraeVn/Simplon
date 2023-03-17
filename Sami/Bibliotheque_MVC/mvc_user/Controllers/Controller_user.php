<?php

class Controller_user extends Controller
{
    public function action_default()
    {
        $this->action_user(); // rediriger par défaut vers la page de connexion
    }

    public function action_user()
    {
        $this->render("connexion"); // afficher la page de connexion
    }


    public function action_deconnexion()
    {
        session_start();
        session_destroy();
        header('Location: ../index.php');
    }
}
