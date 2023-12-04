<?php

include("inc/header.php");
include("inc/menu.php");
session_start();
if(!isset($_SESSION["chiffre_al"])){//Le !isset fait l'inverse du isset , c'est à dire qu'il renverra true si justement le champ n'est pas renseigné
$_SESSION["chiffre_al"]= rand(1,10);
// var_dump($_SESSION);
}

?>

<h1>Trouver le chiffre</h1>
<form action="" method="post">
 <label for="chiffre">Chiffre : </label>
 <input type="number" name="chiffre" id="">
 <input type="submit" value="Trouver">

 </form>
 <p>
    <form action="" method="post">
        <input type="submit" name="reinit" value ="Reinit">
    </form>
</p>
 <div id="output">

 <?php
if(isset($_POST["reinit"])){
    $_SESSION["chiffre_al"]= rand(1,10);
}
 $chiffre_al=$_SESSION["chiffre_al"];
 
 if(isset($_POST["chiffre"]) && $_POST["chiffre"]>0){
    $chiffre =(int)$_POST["chiffre"];
   
    if($chiffre === $chiffre_al){
        echo "C'est gagné";
    }
    elseif($chiffre>$chiffre_al){
     echo "<p> Le nombre est plus grand</p>";
 }else{
    echo "<p>Le nombre est plus petit</p>";
 }}
 
 ?>
 </div>















<?php
   include("inc/footer.php");
   ?>