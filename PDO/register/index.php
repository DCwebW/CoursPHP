<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">


    <label for="name">Nom :</label> 
    <input type="text" name="name" id="">

    <label for="email">Email :</label>
    <input type="email" name="email" id="">

    <label for="passsword">Password</label>
    <input type="password" name="password" placeholder ='Votre mot de passe'>

    <input type="submit" name= 'sub' value="Envoyer">
    </form>
    <?php
    if(isset($_POST['sub'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
       $spass= password_hash($pass,PASSWORD_BCRYPT);
        require "db.php";
        if($connect){
            $stmt=$connect->prepare("INSERT INTO formpoo(name,email,password) VALUES (?,?,?)");
            $stmt->execute([$name,$email,$spass]);
            echo "<span style='color:green'>Data successfully inserted</span>";
        }
    }?>
</body>
</html>