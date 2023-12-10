<?php

session_start();
if (isset($_SESSION['client'])){
    $infosclient= $_SESSION['client'];
}
;

$modifierUrl = 'Exo3base+session.php?modifier=1'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Confirmer l'adresse de livraison</h1>


<form action="Exo3base+session(Envoi).php" method="post">
<fieldset><legend>Confirmer : </legend>

<label for="nom">Nom :</label>
<input type="text" name="nom" id="" value="<?php echo  $infosclient['nom'];?>" readonly>
<label for="prenom">Prénom :</label>
<input type="text" name="prenom" id="" value="<?php echo $infosclient['prenom']?>" readonly>
<label for="">Adresse :</label>
<input type="text" name="adresse" id="" value="<?php echo $infosclient['adresse'];?>" readonly>
<label for="cp">Code postal :</label>
<input type="number" name="cp" id="" value="<?php echo $infosclient['codepostal']?>" readonly>
</fieldset>
<input type="submit" value="Envoyer">

</form>
<form action="Exo3base+session.php" method="get">
        <!-- Bouton pour modifier -->
        <input type="hidden" name="modifier" value="1">
        <input type="submit" value="Modifier">
    </form
<?php


            
?>
</body>
</html>