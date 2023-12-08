<?php
class personne{
    private $nom;
    private $img;
    private $age;
    private $sexe;
    private $exp;


    const HOMME = true; // Décalration d'une constante dans une classe
    const FEMME = false;

    function __construct($nom,$img,$age,$sexe,$exp){
        $this ->nom=$nom;
        $this ->img=$img;
        $this ->age=$age;
        $this ->sexe=$sexe;
        $this ->exp=$exp;

    }
    function getNom(){return $this->nom;}
    function getImg(){return $this->img;}
    function getAge(){return $this->age;}
    function getSexe(){return $this->sexe;}
    function getExp(){return $this->exp;}

    function setNom($nom){$this->nom=$nom;}
    function setImg($img){$this->img=$img;}
    function setAge($age){$this->age=$age;}
    function setExp($exp){$this->exp=$exp;}


    
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
        echo "Sexe : ";
        if($this ->sexe){
            echo "Homme <br>";
        }else{
            echo "Femme <br>";
        }
        echo "Expérience: : ".$this->exp."<br>";
        
    }
    
}








?>