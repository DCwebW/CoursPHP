<?php

echo "<h1>Tableau</h1>";

$p1 = ["nom" => "Ganesh","age" => 53, "Sexe" => true];
$p2 = ["nom" => "Sarah", "age"=> 28, "Sexe"=> false];
$p3= ["nom"=> "Gildas", "age"=>38, "Sexe"=> true];
$users=[$p1,$p2,$p3];

function afficherUser($user){
    echo "Nom : ".$user['nom']."<br>";
    echo "Nom : ".$user['age']."<br>";
    if($user){
        echo "Sexe: Homme <br>";
    }else{
        echo "Sexe : Femme <br>";
        
    }
}

foreach($users as $user){
    afficherUser($user);
    echo "<br>";
}
