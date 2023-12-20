<?php
require_once("Modèles\MainManager.model.php");
class MainController{
    private $mainManager;
    private function genererPage($data){
        
        
        extract($data);
        ob_start();
        require_once($view);
        $page_content = ob_get_clean();
        require_once($template);
    }
    public function __construct(){
            $this ->mainManager=new MainManager();
        }
    public function accueil(){
        $data_page = [

            "page_title" => "Titre de la page d'accueil",
            "page_description" => "Description de la page d'accueil",
            "view" => "./Vues/accueil.view.php",
            "template" => "Vues/DossierCommun/template.php"
        ];
        $this ->genererPage(($data_page));
        // $page_title = "Titre de la page d'accueil";
        // $page_description = "Description de la page d'accueil";
        // ob_start();
        // require_once("./Vues/accueil.view.php");

        // $page_content = ob_get_clean();
        // require_once("Vues/DossierCommun/template.php");
    }
    public function page1(){
        $datas = $this ->mainManager->getDatas();
        $_SESSION['alert']=[
            'type'=> 'alert-success',
            'message'=> "Exemple d'alerte"];
      $data_page=[  "page_title" => "Titre de la page 1",
            "page_description" => "Description de la page 1",
            "view" => "./Vues/page1.view.php",
            "template" => "Vues/DossierCommun/template.php",
            "datas" =>$datas
        
        ];
            $this ->genererPage(($data_page));

    //     $page_title = "Titre de la page 1";
    // $page_description = "Description de la page 1";
    // ob_start();
    //     require_once("./Vues/page1.view.php");

    //     $page_content = ob_get_clean();
    // require_once("Vues/DossierCommun/template.php");
    }
    public function page2(){
        $_SESSION['alert']=[
            'type'=> 'alert-primary',
            'message'=> "Exemple d'alerte"];
        $data_page=[  "page_title" => "Titre de la page 2",
        "page_description" => "Description de la page 2",
        "view" => "./Vues/page2.view.php",
        "template" => "Vues/DossierCommun/template.php"];
        $this ->genererPage(($data_page));

    //     $page_title = "Titre de la page 2";
    // $page_description = "Description de la page 2";
    
    // ob_start();
    //     require_once("./Vues/page2.view.php");

    //     $page_content = ob_get_clean();
    // require_once("Vues/DossierCommun/template.php");
    }
    public function page3(){


        $data_page=[  "page_title" => "Titre de la page 3",
            "page_description" => "Description de la page 3",
            "view" => "./Vues/page3.view.php",
            "template" => "Vues/DossierCommun/template.php"];
            $this ->genererPage(($data_page));
    //     $page_title = "Titre de la page 3";
    // $page_description = "Description de la page 3";
    
    // ob_start();
    //     require_once("./Vues/page3.view.php");

    //     $page_content = ob_get_clean();
    // require_once("Vues/DossierCommun/template.php");
    }
    public function pageErreur($msg){

        $data_page=[  "page_title" => "Titre d'erreur",
            "page_description" => "Description de la page d'erreur",
            "msg" => $msg,
            "view" => "./Vues/erreur.view.php",
            "template" => "Vues/DossierCommun/template.php"];
            $this ->genererPage(($data_page));
        // $page_title = "Titre d'erreur'";
        // $page_description = "Description de la page d'erreur";
        // ob_start();
        // require_once("./Vues/erreur.view.php");

        // $page_content = ob_get_clean();
        // require_once("Vues/DossierCommun/template.php");

    }}