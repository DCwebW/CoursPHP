
   




<?php

include("inc/header.php");
include("inc/menu.php");


?>
<form action="Formulairepourboucles.php"method="get">
<h1 class='Formboucles'>Formulaire pour boucles et pyramides</h1>
   <label for="hauteur" >Hauteur :</label>
   <input type="number" name="hauteur" min="2" max="30"required>
   <input type="submit" name="" value="Afficher">
   
   
   <br>



<?php

if(isset($_GET["hauteur"])){
   $hauteur = $_GET["hauteur"];
for ($num=0;$num<$hauteur;$num++){
      for($num2=0;$num2<=$num;$num2++){
    echo"*";    
  }   
 echo"<br>";
}
for ($num3=0;$num3<$hauteur+1;$num3++){
 for($num4=$hauteur;$num4>=$num3;$num4--){
echo"*";
}
echo "<br>";
}}
// }
//    $txt="";
//    echo "<h2> La pyramide de  ".$hauteur."</h2>";
//    for($i=0;$i<$hauteur;$i++){
//       $txt.="*";
//       echo $txt."<br>";
//    }
//    for($i=0,$i<$hauteur-1;$i++){
//       $txt= substr($txt,0,strlen($txt)-1);
//       echo $txt."<br>";
//    }

// }
// ?>


<?php
   include("inc/footer.php");
   ?>
   </body>
</html>