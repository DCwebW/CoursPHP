<?php
var_dump($_POST);
// echo ("<br>");
// print_r($_GET); // Autre style d'affichage que var_dump

// echo"Le nom est : ".$_REQUEST["nom"]."<br>";//$REQUEST peut être utilisé pour récupérer les données d'un formulaire qui soiit en $POST ou en $GET 
// echo "L'age est :".$_REQUEST["age"]."<br>";
echo"Le nom est : ".$_POST["nom"]."<br>";
echo "L'age est :".$_POST["age"]."<br>";
?>