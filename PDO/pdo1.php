<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO</title>
</head>
<body>
    <h1>MySQL - PDO</h1>

    <?php
    $host = 'localhost';
    $dbname ='crud(coursphpmysql)';
    $user = 'root';
    $pass ='';
    try {
        $connect = new PDO("mysql:host=$host; dbname=$dbname",$user,$pass);
        $connect->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Ceci est fait pour gérer les erreurs et récupérer les msg d'erreur
        $query="INSERT INTO users_crud(nom,prenom,age) VALUES ('AITOUARABI','Sabrina',21),('JOHNBAPTISTE','Pamela',26)";
        $connect->exec($query);
        echo "<p style ='color:green'> Data inserted successfully !</p>";
    }catch(PDOException $e){
        echo "Erreur:".$e->getMessage();

    }


    ?>
    
</body>
</html>