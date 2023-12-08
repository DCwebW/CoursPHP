<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire POO</h1>
    <form action="" method="post">

    <p>
        <label for="name">Nom</label>
    </p>
    <p>
        <input type="text" name="name" id="" placeholder="Votre nom ici">
    </p>
    <p>
        <label for="email">Email</label>
    </p>
    <p>
        <input type="email" name="email" id="" placeholder="Votre email ici">
    </p>

    <p>
        <label for="password">Mot de passe</label>
    </p>
        
    <p>
            <input type="password" name="password" id="" placeholder="Votre mot de passe">
     </p>
    
    <p>
        <input type="submit" value="Envoyer">
    </p>
    </form>
    <?php
    include "ProccessFormulaire.php";
    $db = new db();
    if(isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['password'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass  =$_POST['password'];
        $spass = password_hash($pass,PASSWORD_BCRYPT);// Manière de crypter un mot de passe 
        $query = "INSERT INTO formpoo(name,email,password) VALUES ('$name','$email','$spass')";
        $db -> insert($query);}
    
    ?>
</body>
</html>