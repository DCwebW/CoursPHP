<?php
session_start();
define("URL",str_replace("index.php","",(isset($_SERVER['https'])?"https":"http")."://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));
require_once("./Controleurs/ControleurPrincipal.controller.php");
$mc = new MainController;
try{
if (empty($_GET['page'])){
    $page = 'accueil';

}else{
    $url = explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
    $page = $url[0];
    

}
switch($page){
    case "accueil" :
    $mc -> accueil();
break;

    case "page1" : 
    $mc -> page1();
    
    
    break;
    case "page2" : 
   $mc -> page2();
    

    break;
    case "page3" : 
   $mc -> page3();
    break;
    default : throw new Exception("<strong>La page n'existe pas</strong>");
}
}
catch(Exception $e){
    $page_title = "Titre d'erreur'";
    $page_description = "Description de la page d'erreur";
    
    $page_content = $e ->getMessage();
}
require_once("Vues/DossierCommun/template.php");


?>