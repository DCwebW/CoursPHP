<?php
class countries{
    public $fr ="France";
    public $es="Espagne";
    public $ang="Angleterre";

}

class players extends countries{
    public $p1="Messi";
    public $p2="Gavi";
    public $p3 = "Bellingham";
    public function player(){
        return $this ->p2."= country is ".$this-> es;// Ici la propriété es de la classe countries est utilisable car players est une instance 
    }
}

$p = new players;
echo $p ->player();