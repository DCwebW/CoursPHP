

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "roundhouse.proxy.rlwy.net";
$username = "root";
$password = "2E-GD-1Cd6b5ddhh252b-D2212BCaf6e";
$dbname = "railway";
$port = 30700;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if(isset($_POST)){
    $nom = $_POST['name'];
    $titre = $_POST['title'];
    $content = $_POST['content'];
    $slug = $_POST['slug'];

    $sql = "INSERT INTO Articles(title,content,slug) VALUES(:title, :content, :slug)";
    $sql2 = "INSERT INTO auteurs(nom) VALUES(:name)";
    $resolve = $conn->prepare($sql);
    // $resolve->bindValue(':titre', $titre,PDO::PARAM_STR);
    // $resolve->bindValue(':content', $content,PDO::PARAM_STR);
    // $resolve>bindValue(':slug', $slug,PDO::PARAM_STR);
    $params = array(':title' => $titre, ':content' => $content, ':slug' => $slug);
    $resolve->execute($params);
   
}

if($resolve){
    echo ("Informations Envoyées");

    
    

}
else {
    echo("Problème au niveau de la connexion");
}


?>


