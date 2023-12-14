

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 

<body>
  
<h1>Confirmer l'adresse de livraison</h1>


<form id="monform" action="" method="post">
<fieldset><legend>Confirmer : </legend>

<label for="nom">Nom :</label>
<input type="text" name="nom" id="nom" value="" readonly>
<label for="prenom">Prénom :</label>
<input type="text" name="prenom" id="prenom" value="" readonly>
<label for="">Adresse :</label>
<input type="text" name="adresse" id="adresse" value="" readonly>
<label for="cp">Code postal :</label>
<input type="number" name="cp" id="cp" value="" readonly>
</fieldset>
<input type="submit" value="Recommencer" name="recommencer" onclick= 'effacer()'>
<input type="submit" value="Modifier" name="modifier" >
<input type="submit" value="Envoyer" name="envoyer">

       
</form>
<?php

if(isset($_POST['recommencer'])){
  header("Location:Exo3base+session - Copie.php");
  exit();
}
elseif(isset($_POST['modifier'])){
header("Location:Exo3base+session2 - Copie.html");
}
elseif(isset($_POST['envoyer'])){
  header("Location:Exo3base+session(Envoi).php");
}

?>
 <script>
   
     var données = localStorage.getItem("InfosAdresses")

     var donnéestraduites= JSON.parse(données)

     document.getElementById("nom").value = donnéestraduites.nom
     document.getElementById("prenom").value = donnéestraduites.prenom
     document.getElementById("adresse").value = donnéestraduites.adresse
     document.getElementById("cp").value = donnéestraduites.codepostal


 function effacer(){

  

  localStorage.clear();
 }
            
</script>
</body>
</html>