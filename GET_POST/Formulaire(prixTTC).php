<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Prix TTC</h1>

    <form action="Formulaire(prixTTC).php" method="get">
<label for="prix">Prix : </label>
<input type="number" name="prix" min="1" required>
<input type="submit"  value="Envoyer">
<br>
<br>



    </form>
 <?php
 define ("TVA",0.2);
 ;
 if(isset($_GET["prix"])){
    $PrixHT=$_GET["prix"];
//  echo "Le prix TTC est : ".PrixHT+(PrixHT*TVA)." €";
function ttc($PrixHT){
    return $PrixHT *1.2;
}
$prixTTC = ttc($PrixHT);
echo "Le prix TTC est de : ".$prixTTC." €<br>";
 }
 ?>
</body>
</html>