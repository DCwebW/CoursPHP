<?php

include("inc/header.php");
include("inc/menu.php");

?>
<h1>Calculer une moyenne</h1>
<form action="" method="get">
<label for="notes">Combien de notes :</label>
<input type ="number" name="nb" min="1">
<input type="submit" value="MOYENNE">

</form>
<?php

if(isset($_GET["nb"])){
    $notes=$_GET["nb"];
    echo "<form action=\"#\" method=\"post\">";
    for($i=1;$i<=$notes;$i++){
        echo "Note :".$i." = ";
        echo '<input type="number" name="note'.$i.'" required><br>';
    }
    echo '<input type="submit" value="Calculer">';
    echo "</form>";
    if(isset($_POST["note1"])){
        $somme=0;
        for($i=1;$i<=$notes;$i++){
            $somme+=$_POST["note".$i];
        }
        echo "La moyenne est : ".$somme/$notes;
    }
     
}

function calculerMoyenne($notes) {
    if (empty($notes)) {
        return 0;
    }
    $somme = array_sum($notes);
    return $somme / count($notes);
}
// fonction pour le test


?>








<?php
   include("inc/footer.php");
   ?>