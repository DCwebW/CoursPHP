 <?php

$connect = mysqli_connect("localhost","root","","adresseslivraison");
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse=$_POST["adresse"];
$codepostal = $_POST["cp"];

// $query="INSERT INTO ss(nom,prenom,adresse,cp) VALUES ('$nom','$prenom','$adresse','$codepostal')";
// $result = mysqli_query ($connect,$query);
$query ="INSERT INTO ss(nom,prenom,adresse,cp) VALUES(?,?,?,?)";
$result=mysqli_prepare($connect,$query);
$ok = mysqli_stmt_bind_param($result,"sssi",$nom,$prenom,$adresse,$codepostal);
$ok = mysqli_stmt_execute($result);
if($result){
    echo "<h2>Envoi réussi</h2>";
}
else{
    echo "<h2>Envoi échoué</h2>";
}




?> 