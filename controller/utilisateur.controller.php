<?php
require_once '../../model/utilisateur.php';

class utilisateurController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new utilisateur();
    }
    
    public function Index(){
        require_once '../../view/header.php';
        require_once '../../view/utilisateur/utilisateur.php';
       
    }
    
    public function Crud(){
        $utilisateur = new utilisateur();
        
        if(isset($_REQUEST['id'])){
            $utilisateur = $this->model->Obtenir($_REQUEST['id']);
        }
        
        require_once '../../view/header.php';
        require_once '../../view/utilisateur/utilisateur-editer.php';
        
    }
    
    public function Enregistrer(){
        $utilisateur = new utilisateur();
        
        $utilisateur->id = $_REQUEST['id'];
        $utilisateur->prenom = $_REQUEST['prenom'];
        $utilisateur->nom = $_REQUEST['nom'];
        $utilisateur->login = $_REQUEST['login'];
        $utilisateur->password = $_REQUEST['password'];  
        $utilisateur->idprofil = $_REQUEST['idprofil'];    
      

        $utilisateur->id > 0 
            ? $this->model->Maj($utilisateur)
            : $this->model->Creer($utilisateur);
        
        header('Location: index.php');
    }
    
    public function Supprimer(){
        $this->model->Supprimer($_REQUEST['id']);
        header('Location: index.php');
    }
}