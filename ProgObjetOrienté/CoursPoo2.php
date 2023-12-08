<?php

// class formateur{
//     public $nom;
//     function addnom(){
//         return $this -> nom ="COINTRE";

//     }
// }
// $f = new formateur;
// echo $f -> addnom();

class formateur{
    public static $nom ="COINTRE";
    public static function addnom(){
        return self :: $nom ="DARYL";
    }
}
echo formateur ::$nom;
echo "<br>";
echo formateur ::addnom();