<?php
class house{
    private $year;
    private $roomnumber;
    private $surface ;
    private  $id;
    private static $idCounter = 0; //Ici on met une variable qui sera incrémentée dans les instances 

    function __construct($year,$roomnumber,$surface,){
    $this ->year=$year;
    $this ->roomnumber=$roomnumber;
    $this ->surface=$surface;
    self::$idCounter++;
    $this ->id= self::$idCounter;
}



function getYear(){return $this->year;}
function getRoomnumber(){return $this->roomnumber;}
function getSurface(){return $this->surface;}
function getid(){return $this->id;}//Pas necessaire mais rajoute des controles sur les accès aux propriétés privées de la classe 

function setYear($year){$this->year=$year;}
function setRoomnumber($roomnumber){$this->roomnumber=$roomnumber;}
function setSurface($surface){$this->surface=$surface;}
function setid($id){$this->id=$id;}// Ces fonctions offrent un moyen controlé de mettre à jour les donner 

public function afficher_info(){
    
    
    echo "<tr><td>".$this->id."</td>";
 
    echo "<td>".$this->year."</td>";
    echo "<td>".$this->roomnumber."</td>";
    echo "<td>".$this->surface."</td></tr>";
}
}


