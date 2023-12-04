<?php

include("inc/header.php");
include("inc/menu.php");


?>

<h1>Personnages</h1>
<form action="" method="post">

<label for="personnage">Personnage :</label>
<select name="personnage" id="">
    <option value="vide"> Choisir un personnage</option>
    <option value="h">Homme</option>
    <option value="f">Femme</option>
</select>
<input type="submit" value="personnage">
</form>
<?php

if(isset($_POST["personnage"])){
    if(($_POST["personnage"]==="h")){
        echo '<img src="images\2.PNG">';
        
    }
    else{
        echo '<img src="images\3.PNG">';//Cette syntaxe appelle une image dans la page 
    }}




?>








<?php
   include("inc/footer.php");
   ?>