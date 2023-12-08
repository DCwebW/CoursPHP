<?php
$host = 'mysql:host=localhost;dbname=daryl';
$user ='root';
$pass = '';

try {
    $connect = new PDO($host,$user,$pass);
    $connect->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
}catch(PDOException $e){
    echo "Erreur : ".$e->getMessage;

}?>