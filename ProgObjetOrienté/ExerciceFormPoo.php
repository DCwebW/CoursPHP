<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact Formulaire</h1>
    <form action="" method="post">
        <p>
            <label for="name">Nom :</label>
            <input type="text" name="Nom" id="nom" placeholder="Votre nom ici" required>
        </p>
        <p>
        <label for="">Email :</label>
        <input type="text" name="email" id="email" placeholder="Votre Email ici" required>
    </p>
    <p>
    <label for="">Sujet :</label>
    <input type="text" name="sujet" id="sujet" placeholder="Sujet">
</p>
<p><label for="">Message :</label>
<textarea name="message" id="message" cols="30" rows="10"></textarea>
</p>
<input type="submit" name="submit" value="Envoyer">


    </form>
<?php
include "ExerciceFormPoo(proccess).php";

$db = new db();
if(isset($_POST['submit'])){
    $Nom=$_POST['Nom'];
    $email=$_POST['email'];
    $sujet  =$_POST['sujet'];
    $message = $_POST['message'];
    $query = "INSERT INTO users(Nom,email,sujet,message) VALUES ('$Nom','$email','$sujet','$message')";
    $db -> insert($query);}


?>
</body>
</html>