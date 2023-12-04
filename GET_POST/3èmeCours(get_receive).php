<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>GET RECEIVE</h1>
    <?php
    //  var_dump($_GET)
    // echo "Nom : ".$_GET["nom"]."<br>";
    // echo "Age : ".$_GET["age"]."<br>";
    $num =$_GET['number'];
    if ($num>0 && $num<11){ 
        for($i=1;$i<=$num;$i++){
            echo"Bonjour<br>";
        }

    }
    else{
        echo "Number is out of limit";
    }
   
    ?>
</body>
</html>