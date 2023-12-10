<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<?php
require ("Exo2classes.php");
?>
<style>
table{
  border-collapse: collapse
}

td{
  border: 1px solid black;
  padding: 10px;
}
th{
  border: 1px solid black;
  padding: 10px;
}
</style>
<body>
<h1>Maison disponibles</h1>
<table><tr>
    <th>#</th>
    <th>Année</th>
    <th>Nombre de chambres</th>
    <th>Surface</th>
</tr>
 <?php

$maison1= new house("1992",4,80);
$maison1 ->afficher_info();

$maison2 = new house ("2021",3,100);
$maison2 ->afficher_info();
?>
</table>


</body>
</html>


