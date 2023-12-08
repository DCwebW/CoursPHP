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