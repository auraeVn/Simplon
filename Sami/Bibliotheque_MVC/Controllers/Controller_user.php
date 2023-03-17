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

    public function action_connexion()
    {
        $this->render("connexion");
    }

    public function action_traitement_connexion()
    {   
        
        if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
            $m = Model::get_model();
            $email = trim(htmlspecialchars($_POST['email']));
            $mdp = trim(htmlspecialchars($_POST['mdp']));
            $user = $m->get_traitement_connexion($email, $mdp);

            
     if (!empty($user)) {
     
        $nom = $user->nom;
        $prenom = $user->prenom;
        $role = $user->role;
        
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['role'] = $role;
     }

     if ( $role == "admin"){
        header('Location: mvc_admin/');
     } else if ($role == "user") {
        header('Location: mvc_user/');
        }else{
            $this->render("connexion");
        }
    }
}


    public function action_inscription()

    {
        $this->render("inscription");
    }

    public function action_traitement_inscription()
    {
        if (!empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mdp'])) {
            $m = Model::get_model();
            $nom = trim($_POST["nom"]);
            $prenom = trim($_POST["prenom"]);
            $email = trim($_POST["email"]);
            $mdp = trim($_POST["mdp"]);

            $data = $m->get_traitement_inscription($nom, $prenom, $email, $mdp);
            var_dump($nom, $prenom, $email, $mdp);

            $_SESSION['email'] = $data->email;
            $_SESSION['nom'] = $data->nom;
            $_SESSION['prenom'] = $data->prenom;
            $_SESSION['mdp'] = $data->mdp;

            header('Location: ?controller=user&action=connexion.php');
        } else {
            echo "Inscription impossible";
        }
    }

    public function action_deconnexion()
    {
        session_start();
        session_destroy();
        header('Location: index.php');
    }


}
