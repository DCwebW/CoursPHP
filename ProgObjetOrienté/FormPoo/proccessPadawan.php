<?php
class db{
    private $host ="monorail.proxy.rlwy.net";
    private $user ="root";
    private $pass ="AhDg35GFBBgaE35bd23-gccGA1a44b2-";
    private $db_name ="railway";
    private $link;

    private function connect(){
        $this -> link = new mysqli($this -> host,$this ->user,$this->pass,$this->db_name);
    }
    public function __construct(){
        $this-> connect();
    }
    public function insert($query){
        $result = $this -> link ->query($query);
        if($result){
            echo "<h2> Formulaire envoyé avec succès</h2>";
        }
        else{
            
            echo "<h2>Echec de l'envoi</h2>";
        }
    }
}
?>