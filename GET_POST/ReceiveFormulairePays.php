<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM RECEIVE</h1>
    <p>Nom:<?php 
    echo $_GET["nom"];
    ?></p>

    <p> 
        Genre : <?php
        if(isset($_GET["Genre"])){
            foreach($_GET["Genre"] as $genre ){;
                echo $genre;
        }}
        else{
            echo "Aucun Genre sélectionné";
        }
      ?></p>
      
      <p>
      Pays a visiter :
      <?php 
         
        if(isset($_GET["Pays"])){
            foreach($_GET["Pays"] as $value ){
            echo $value.";";}
        }
        else{
            echo "Aucun pays sélectionné";
        }?>
        </p>
        <p>
            Age : 
        <?php
         echo $_GET["age"];
         ?>
         <br>
         </p>

         <p> Langues parlées : 
            <?php
            if(isset($_GET["Langues"])){
                foreach($_GET["Langues"] as $lan)
                echo $lan.";";
            }
            else{
                echo "Aucune langue sélectionnée";
            }
            ?>
            </p>
</body>
</html>