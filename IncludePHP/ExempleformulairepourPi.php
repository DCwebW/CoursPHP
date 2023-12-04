<?php

include("inc/header.php");
include("inc/menu.php");


?>

<form action="ExempleformulairepourPi.php" method="get">
    <h1>Périmètre et Aire d'un cercle</h1>
    <label for="rayon">Rayon</label>
    <input type="number" name="rayon" value = "1" min="1" required></input>
    <label for="perimetre">Périmètre</label>
    <input type="checkbox" name="perimetre" value="checked" >
    <label for="aire">Aire: </label>
    <input type="checkbox" name="aire" id="">
    <input type="submit" value="Calculer"><br><br>
</form>

<div id="output">
<?php
if(isset($_GET["rayon"])){
    $rayon=$_GET["rayon"];//Calcul du périmètre d'un cercle
    if(isset($_GET["perimetre"])){
        $perimetre= round($rayon*2*M_PI);
        echo "Le périmètre est de ".$perimetre." cm, si le rayon est egal à ".$rayon." cm<br><br>";
    }
}
if(isset($_GET["rayon"])){
    $rayon=$_GET["rayon"];//Calcul de l'aire d'un cercle
    if(isset($_GET["aire"])){
        $aire= round (($rayon *$rayon*M_PI),3);
        echo "L'aire  est de ".$aire." cm, si le rayon est egal à ".$rayon." cm<br><br>";
    }
}

?>
</div>




<?php
   include("inc/footer.php");
   ?>