<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations</title>
</head>
<body>

<?php
$connect="mysql:dbname=formation;host=localhost";
$user='root';
$pass='';

try{

    $PDO = new PDO($host,$user,$pass);
}catch(PDOException $e){
    echo"message d'erreur: ".$e->getMessage();
}
?>
    
</body>
</html>