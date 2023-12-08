<?php
class formateur{
    // public $nom = "GANESH";
    // private $nom = "GANESH"; cette propriété en mode private n'est disponible que dans cette classe 
    protected $nom = "GANESH"; // cette propriété en protected est disponible par les sous-classes de cette classe
    public $âge = 52;
    
    function hello(){
        echo "<h1>Bonjour</h1>";
    }

}
class formateurg2r extends formateur{
    // Ici on fait une sous classe de la classe formateur
    public function nomformateur(){
        return  $this -> nom; // Ceci est une fonction qui donne accès à la propriété $nom qui était de base protégée
    }
}
$f = new formateur;
echo $f -> hello();
// echo $f -> nom; 
$f1 = new formateurg2r;
echo $f1 -> nomformateur(); // ici on fait appel à la méthode 





?>