<!DOCTYPE html>
<?php

$panier = $_COOKIE["panier"];
$total = 0;
$total = $panier["prod1"]*5+$panier["prod2"]*4+$panier["prod3"]*6 ;

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <style>
        h1,p{

        }
        </style>
</head>
<body>
    <h1>TotalPanier</h1>
    <p>Le total de votre panier est = <?php echo $total?>€</p>
    <a href="Cookies2(panier).php">Modifier mon panier</a>
    <a href="Cookies2(Suiteachats).php">Vider mon panier</a>
    
</body>
</html>