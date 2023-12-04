<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEND</title>
</head>
<body>
    <h1>SEND</h1>

    <form action ="ReceiveFormulairePays.php" method="get">
        <fieldset>
        <label for="Nom" >Nom</label>
        <input type="text" name="nom" value=""><br><br>
        <label for="Genre">Genre</label>
        <input type="radio" name="Genre[]" value="Femme">Femme</input>
        <input type="radio" name="Genre[]" value="Homme">Homme</input><br><br>
        <label for="Nationalité">Nationalité</label>
        <select name="Nationalité" value="">
           <option value="vide" selected></option> 
           <option value="fr"> Français</option>
           <option value="all">Allemand</option>
        </select><br><br>
        <label for="Paysàvisiter">Pays à visiter:</label><br>
        <input type="checkbox" name="Pays[]" value="FR">France</input>
        <input type="checkbox" name="Pays[]" value="ES">Espagne</input>
        <input type="checkbox" name="Pays[]" value="AN">Angleterre</input>
        <input type="checkbox" name="Pays[]"  value="AL">Allemagne</input><br><br>
        <label for="Paysàvisiter">Langues Parlées</label><br>
        <input type="checkbox" name="Langues[]" value="FRl">Français</input>
        <input type="checkbox" name="Langues[]" value="ESl">Espagnol</input>
        <input type="checkbox" name="Langues[]" value="ANl">Anglais</input>
        <input type="checkbox" name="Langues[]" value="ALl">Allemand</input><br><br>
        <label for="Age">Age</label>
        <input type="number" name="age" id="" value="age" min=16 max =90 required><br><br>
        <input type="submit" value="Envoyer"></input><input type="reset" value="Effacer"></input>
</fieldset>

    
</form>
    
</body>
</html>