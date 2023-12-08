<?php

class hello{
    public function formateur(){
        echo "Hello Ganesh";
    }
    public function __construct(){  // __construct est une fonction qui sera directement appelée quand une instance de la classe sera crée 
        echo "Construct is working";
    }
    
}

$h = new hello;
echo"<br>";
echo $h -> formateur(); // ceci est une manière d'appeler une fonction publique de la classe superrieure à travers son instance 
