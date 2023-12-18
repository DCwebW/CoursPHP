<?php

class maison {
    private $id;
    private $dateCreation;
    private $nombreChambres;
    private $surface;
    private static $i = 1;

    public function __construct($dateCreation,$nombreChambres,$surface){

        $this -> id = self ::$i;
        self :: $i++;
        $this->dateCreation = $dateCreation;
        $this ->nombreChambres = $nombreChambres;
        $this ->surface = $surface;
    }
    public function getId(){return $this ->id;}
    public function getDate(){return $this ->dateCreation; }
    public function getSurface(){return $this -> surface;}
    public function getNbchambre(){return $this ->nombreChambres;}
}