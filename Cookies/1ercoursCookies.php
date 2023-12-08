<?php
// setcookie("nom","GANESH");//Pour déclarer un cookie sur le site internet 

// if(isset ($_COOKIE["nom"])){
//     echo "Nom: ". $_COOKIE["nom"];// Pour afficher le cookie 

// }
// else{
//     echo"Aucun cookie";
// }
$time = 60*60*24*365;// Ici on met dans une variable le temps que le cookie restera sur le site (ici un an selon le calcul)
// var_dump($time)
// var_dump(time());
setcookie("nom","DARYL",time()+$time);//Cette syntaxe applique un cookie qui dura le temps qui est appliqué avec ici la variable $time

 if(isset ($_COOKIE["nom"])){
    echo "Nom: ". $_COOKIE["nom"];// Pour afficher le cookie 

 }
 else{
      echo"Aucun cookie";}
?>