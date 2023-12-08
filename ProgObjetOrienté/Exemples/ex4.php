<?php
include ("inc/header.php");
include ("inc/menu.php");
require ("classes/personneClasse.php");
?>

<h1>POO 4</h1>

<?php

$perso1 = new personne ("John","2.PNG",46,personne::HOMME,5);
$perso1->afficher_info_template();
$perso1 = new personne("Daryl","2.PNG",31,personne::HOMME,0);
$perso1 ->afficher_info_template();







?>

<?php
include ("inc/footer.php");
?>