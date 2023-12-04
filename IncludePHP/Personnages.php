<?php
include("inc/header.php");
include("inc/menu.php");
$p1 = ["Ganesh",53,true,23];
$p2 = ["Sarah",28,false,5]; //A refaire avec des tableaux associatifs
$p3 = ["Mohammed",56,true,28];
?>



<h1>Personnage1</h1>
<form action="" method="post">
<select name="personnage" id="" onchange="submit()">
    <option value="p1" <?php if(isset($_POST['personnage']) && $_POST['personnage']==="p1"){echo"selected";}?>>Ganesh
    </option>
    <option value="p2"<?php if(isset($_POST['personnage']) && $_POST['personnage']==="p2"){echo"selected";}?>>Sarah</option>
    <option value="p3"<?php if(isset($_POST['personnage']) && $_POST['personnage']==="p3"){echo"selected";}?>>Mohammed</option>
</select>
<!-- <input type="submit" value="Valider"> -->

</form>
<h2>G2R FORMATION</h2>
<?php
if(!isset($_POST['personnage'])|| $_POST['personnage']==="p1"){
    echo'<table><tr><td>';
    echo '<img src="images\2.PNG">';
    echo '</td><td>';
    echo afficher($p1);
    echo '</td></tr></table>';


}elseif(isset($_POST['personnage'])&& $_POST['personnage']==="p2"){
    echo'<table><tr><td>';
    echo '<img src="images\3.PNG">';
    echo '</td><td>';
    echo afficher($p2);
    echo '</td></tr></table>';}
elseif(isset($_POST['personnage'])&& $_POST['personnage']==="p3"){
    echo'<table><tr><td>';
    echo '<img src="images\4.PNG">';
    echo '</td><td>';
    echo afficher($p3);
    echo '</td></tr></table>';}
    function afficher($personnage){
        echo "Nom : ".$personnage[0]."<br>";
        echo "Age : ".$personnage[1]." ans<br>";
        if($personnage[2]){
            echo"Sexe : Homme<br>";
        }else{
            echo "Sexe : Femme<br>";
        }
        echo "Expérience : ".$personnage[3]." ans";
    }





?>






<?php
   include("inc/footer.php");
   ?>