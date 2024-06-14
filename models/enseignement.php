<?php
class enseignement {
private $ID,$cin,$idC,$code;
function __construct($cin="",$idC="",$code="") {
	$this->idC=$idC;
    $this->code=$code;
    $this->cin=$cin;
}
public function getId(){
	return $this->ID;
}
public function getIdC(){
	return $this->idC;
}

public function getCode(){
	return $this->code;
}

public function getCin(){
	return $this->cin;
}

public function setCode($code){
        $this->code = $code;
    }
    public function setId($id){
        $this->ID = $id;
    }
public function setIdC($id){
        $this->idC = $id;
    }

public function setCin($cin){
        $this->cin = $cin;
    }
}?>