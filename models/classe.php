<?php
class classe {
private $id,$nomC,$nbr;
function __construct($id="",$nomC="") {
	$this->id=$id;
    $this->nomC=$nomC;
}
public function getId(){
	return $this->id;
}

public function getNom(){
	return $this->nomC;
}

public function getNbr(){
	return $this->nbr;
}

public function setNom($nomE){
        $this->nomC = $nomE;
    }

public function setId($id){
        $this->id = $id;
    }

public function setNbr($nbr){
        $this->nbr = $nbr;
    }
}?>