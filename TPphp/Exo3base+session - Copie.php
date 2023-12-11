<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php





 ?>
<body>
    <h1>Adresse de livraison</h1>


    <form action="" method="post">
    <fieldset>
        <legend>Livraison : </legend>

<label for="nom">Nom :</label>
<input type="text" name="nom" id="nom" required >
<label for="prenom">Prénom :</label>
<input type="text" name="prenom" id="prenom" required>
<label for="adresse">Adresse :</label>
<input type="text" name="adresse" id="adresse" required>
<label for="cp">Code postal :</label>
<input type="number" name="cp" id="cp" required>
    </fieldset>
    <input type="button" value="Suivi de votre commande" onclick="ajouter()">
 </form>
<script>

    function ajouter(){
        let nom = document.getElementById("nom").value;
        let prenom = document.getElementById("prenom").value;
        let adresse = document.getElementById("adresse").value;
        let codepostal = document.getElementById("cp").value;
        let infosAdresses= {"nom": nom , "prenom" : prenom , "adresse":adresse, "codepostal":codepostal}
        localStorage.setItem( "InfosAdresses",JSON.stringify(infosAdresses))
        console.log(infosAdresses)
    }
</script>

   
</body>
</html>