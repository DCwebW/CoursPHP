<?php

include("inc/header.php");
include("inc/menu.php");


?>


   <h1>Le premier exemple</h1>
   <h2>Table de multiplication</h2>
   <?php
   define("TABLE",16);

   echo"<h3> La table de ".TABLE."</h3>";

   for($i=1;$i<=12;$i++){
      echo $i."X".TABLE."=".$i*TABLE."<br>";
   }
   ?>

   <?php
   include("inc/footer.php");
   ?>
   