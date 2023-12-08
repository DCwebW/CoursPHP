<?php
include ("inc/header.php");
include ("inc/menu.php");
?>

<h1>POO 2</h1>
<?php
class personnage {
    public $nom;
    public $img;
    public $age;
    public $sexe;
    public $exp;
    function __construct($nom,$img,$age,$sexe,$exp){
        $this ->nom=$nom;
        $this ->img=$img;
        $this ->age=$age;
        $this ->sexe=$sexe;
        $this ->exp=$exp;

    }
    public function afficher_info_template(){
        echo"<hr>";
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

$perso1 = new personnage("John","2.PNG",30,true,5);
$perso1 ->afficher_info_template();
$perso1 = new personnage("Daryl","2.PNG",31,true,0);
$perso1 ->afficher_info_template();
$perso1 = new personnage("Maeva","1.PNG",29,false,2);
$perso1 ->afficher_info_template();


?>


<?php
include ("inc/footer.php");
?>