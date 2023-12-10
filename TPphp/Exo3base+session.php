<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

session_start();
$nom = ''; $prenom=''; $adresse='';$codePostal='';

if(isset($_POST["nom"]) && ($_POST["prenom"]) && ($_POST["adresse"]) && ($_POST["cp"]) ){
 $infosclient= $_SESSION['client'];

$nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $adresse = htmlspecialchars($_POST["adresse"]);
    $codePostal = htmlspecialchars($_POST["cp"]);
}


if ($_SERVER["REQUEST_METHOD"] == "POST"){
// Vérifie si le formulaire à été soumis

    $nom = isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : $nom;
    $prenom = isset ($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : $prenom; 
    $adresse = isset ($_POST["adresse"]) ? htmlspecialchars($_POST["adresse"]) : $adresse;
    $codePostal =isset ($_POST['cp']) ? htmlspecialchars($_POST["cp"]) : $codePostal;
 
//Ici on récupère les données du formulaire , avec la mention htmlspecialchars pour des raisons de sécurité
    $_SESSION['client']=[
        'nom'=> $nom ,
    'prenom'=>$prenom,
    'adresse'=>$adresse,
    'codepostal'=>$codePostal
    ];
    header('Location:Exo3base+session(suite).php');
    exit();
}

if (isset($_GET['modifier']) && $_GET['modifier'] == 1){
    $infosclient= $_SESSION['client'];

$nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $adresse = htmlspecialchars($_POST["adresse"]);
    $codePostal = htmlspecialchars($_POST["cp"]);
}
 ?>
<body>
    <h1>Adresse de livraison</h1>


    <form action="" method="post">
    <fieldset>
        <legend>Livraison : </legend>

<label for="nom">Nom :</label>
<input type="text" name="nom" id="" required value='<?php echo $nom;?>'>
<label for="prenom">Prénom :</label>
<input type="text" name="prenom" id="" required>
<label for="adresse">Adresse :</label>
<input type="text" name="adresse" id="" required>
<label for="cp">Code postal :</label>
<input type="number" name="cp" id="" required>
    </fieldset>
    <input type="submit" value='Suivi de votre commande'></input>
 </form>


   
</body>
</html>