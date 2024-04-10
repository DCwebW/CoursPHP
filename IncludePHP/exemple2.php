

    


<?php

include("inc/header.php");
include("inc/menu.php");


?>

    <form action="exemple2.php" method="get">
<h1 class="titre">Table de multiplication</h1>

    <input type="number" name="valeur" min="1" required>
    <input type="submit" name="envoi"></input>
</form><br>


    



   <?php
  
  
if(isset ($_GET["valeur"])){
    $val=$_GET["valeur"];

  echo"<h3> La table de ".$val."</h3>";

   for($i=1;$i<=12;$i++){
      echo $i." X ".$val."= ".$i*$val."<br>";
   }}
   ?>
   

   <?php
   include("inc/footer.php");
   ?>
 
</html>