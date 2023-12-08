<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO</title>
</head>
<body>
    <h1>PDO-PREPARE</h1>
  <?php
$host ='localhost';
$dbname ='crud(coursphpmysql)';
$user = 'root';
$pass ='';
try {
     $connect = new PDO("mysql:host=$host; dbname=$dbname",$user,$pass);
        $connect->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $nom =$_POST['name'];
        $prenom =$_POST['prenom'];
        $age = $_POST['age'];
        //Ensuite on met en place la préparation de la requête, cette préparation vise à rajouter une étape supplémentaire à la manipulation des données 
        $stmt = $connect -> prepare("INSERT INTO users_crud(nom,prenom,age) VALUES (:nom,:prenom,:age)");
        $stmt ->execute(array(
            ":nom"=>$nom,
            ":prenom"=>$prenom,
            ":age"=> $age,
        ));
        echo "<p>Data inserted successfully</p>";

}catch(PDOException $e){
    echo "Erreur:".$e->getMessage();
}





?>  
</body>
</html>

