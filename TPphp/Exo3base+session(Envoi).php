<?php

$connect = mysqli_connect("localhost","root","","adresseslivraison");

if(isset($_POST)){
    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $adresse= $_POST['adresse'];
    $codepostal= $_POST['cp'];

    $sql="INSERT INTO adresses(nom,prenom,adresse,cp) VALUES ('$nom','$prenom','$adresse','$codepostal')";
    $resolve = mysqli_query($connect,$sql);

    if(isset($resolve)){
        echo "Données envoyées";
    }
    else{
        echo "Echec de l'envoi";
    }
}