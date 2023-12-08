<?php
include ("inc/header.php");
include ("inc/menu.php");
?>

<h1>POO 3</h1>

<?php
require("personnage1classe.php");


$perso1 = new personnage("John","2.PNG",30,true,5);
$perso1 ->afficher_info_template();
$perso1 = new personnage("Daryl","2.PNG",31,true,0);
$perso1 ->afficher_info_template();
$perso1 = new personnage("Maeva","1.PNG",29,false,2);
$perso1 ->afficher_info_template();
?>





<?php
include ("inc/footer.php");
?>