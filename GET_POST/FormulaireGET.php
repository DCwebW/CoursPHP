<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form action="FormulaireGET.php" method="post">
        <fieldset>
            <legend>INFO</legend>
        <label for="nom"> Nom : </label>
        <input type="text" placeholder="Votre nom ici" name ="nom"><br><br>

        <label for="age">Age : </label>
        <input type="number" min="1" max="100" name="age" id="" required >
        <input type="submit" value="Envoyer">;
</fieldset>
    </form>
    <?php
    if(isset($_POST["nom"])){
        echo "Le Nom est : ".$_POST["nom"]."<br>";
        echo "L'Age' est : ".$_POST["age"]."<br>";}
    
    ?>
</body>
</html>