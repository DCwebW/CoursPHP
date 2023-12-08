<?php

$ages =['Daryl'=> 31, 'Cassandra'=> 29, 'Maeva'=> 29];
$sexe =  ['Daryl'=> true, 'Cassandra'=> false, 'Maeva'=> false];
$noms =  ['Daryl'=> 'Daryl', 'Cassandra'=> 'Cassandra', 'Maeva'=> 'Maeva'];



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Personnages</h1>
    <form action="" method="post" onchange="submit()">
    <select name="personnage" id="" >
    <option value='Daryl' <?php if(isset($_POST['personnage']) && $_POST['personnage']===$noms['Daryl']){echo"selected";}?>>Daryl
    </option>
    <option value="Cassandra"<?php if(isset($_POST['personnage']) && $_POST['personnage']===$noms['Cassandra']){echo"selected";}?>>Cassandra</option>
    <option value="Maeva"<?php if(isset($_POST['personnage']) && $_POST['personnage']===$noms['Maeva']){echo"selected";}?>>Maeva</option>
</select>

    </form>
    <h2>Sélection de personnes</h2>
<?php
if(!isset($_POST['personnage'])|| $_POST['personnage']===$noms['Daryl']){
    echo'<table><tr><td>';
    echo afficher($noms['Daryl'],$ages['Daryl'],$sexe['Daryl']);
    echo '<td><tr><table>';
}
elseif(isset($_POST['personnage'])&& $_POST['personnage']===$noms['Cassandra']){
    echo'<table><tr><td>';
    echo afficher($noms['Cassandra'],$ages['Cassandra'],$sexe['Cassandra']);
    echo '<td><tr><table>';
}
elseif(isset($_POST['personnage'])&& $_POST['personnage']===$noms['Maeva']){
    echo'<table><tr><td>';
    echo afficher($noms['Maeva'],$ages['Maeva'],$sexe['Maeva']);
    echo '<td><tr><table>';
}


function afficher($nom,$age,$sexe){
    echo "Nom : ".$nom."<br>";
    echo "Age : ".$age." ans<br>";
    if($sexe){
        echo"Sexe : Homme<br>";
    }else{
        echo "Sexe : Femme<br>";
    }
}



?>
    
</body>
</html>