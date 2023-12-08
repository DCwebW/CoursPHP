<!DOCTYPE html>
<?php
$panier= $_COOKIE["panier"];
// var_dump($panier)

switch(@$_GET["stock"]){
    case "prod1":
        $panier["prod1"]++;
        setcookie("panier[prod1]",$panier["prod1"]);
        break;}
switch(@$_GET["stock"]){
    case "prod2":
        $panier["prod2"]++;
        setcookie("panier[prod2]",$panier["prod2"]);
        break;}
switch(@$_GET["stock"]){
    case "prod3":
        $panier["prod3"]++;
        setcookie("panier[prod3]",$panier["prod3"]);
        break;}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <style>
            h1,p{
        text-align: center;
        
    }
    table{
        border: 1px solid #000;margin:auto; width: 300px;border-collapse:collapse;
    }
    td{
        border: 1px solid #000;
    }

        </style>
    
   
</head>

<body>
    <h1>Panier</h1>
    <h1>Ajouter des articles</h1>
    <table>
        <tr>
            <td>Ajouter</td>
            <td>Votre Commande</td>
        </tr>
        <tr>
            <td>
                <a href="Cookies2(panier).php?stock=prod1">Produit1</a>[5€]
                
                <td><?php
            echo $panier["prod1"]    
                ?></td>
            </td>
        </tr>
        <tr>
            <td>
                <a href="Cookies2(panier).php?stock=prod2">Produit1</a>[4€]
                
                <td><?php echo $panier["prod2"] ?> </td>
            </td>
        </tr>
        <tr>
            <td>
                <a href="Cookies2(panier).php?stock=prod3">Produit1</a>[6€]
                
                <td><?php echo $panier["prod3"] ?>  </td>
            </td>
        </tr>
    </table><br><br>
    <p><a href="Cookies2(Suiteachats).php">Vider mon Panier</a></p>
    <br><br>
    <p><a href="Cookies2(total).php">Total</a></p>
    
</body>
</html>