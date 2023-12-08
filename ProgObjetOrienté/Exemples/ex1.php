<?php
include ("inc/header.php");
include ("inc/menu.php");
?>

<h1>POO 1</h1>
<?php

class personnage{
    public $nom ="Daryl";
    public $img ="2.PNG";
    public $age = 31;
    public $sexe = true;
    public $exp = 0;

    public function afficher_info_template(){
        echo "<table><tr><td>";
        echo "<img src='photos/$this->img' alt=''>";

        echo"</td><td>";
        $this-> afficher_info();

        echo"</td></tr></table>";
    }
    public function afficher_info(){
        echo "Nom : ".$this->nom."<br>";
        echo "Age : ".$this->age."<br>";
        
        if($this ->sexe){
            echo "Homme <br>";
        }else{
            echo "Femme <br>";
        }
        echo "Expérience: : ".$this->exp."<br>";
    }
}

$perso = new personnage();
$perso -> afficher_info_template();
echo "<hr>";
$p1 = new personnage;
$p1->nom="Alice";
$p1->img="1.PNG";
$p1->age=40;
$p1->sexe=false;
$p1->exp=18;
$p1->afficher_info_template(); 

?>

<?php
include ("inc/footer.php");
?>