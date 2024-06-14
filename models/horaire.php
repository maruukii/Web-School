<?php

class horaire {
private $id,$cinP,$codeM,$idC,$nbr,$date,$jour;
function __construct($cinP="",$codeM="",$idC="",$nbr="") {
	
    $this->cinP=$cinP;
    $this->codeM=$codeM;
    $this->nbr=$nbr;
    $this->idC=$idC;
}
public function getJour(){
	return $this->jour;
}
public function getId(){
	return $this->id;
}
public function getDate(){
	return $this->date;
}
public function getCin(){
	return $this->cinP;
}
public function getIdc(){
	return $this->idC;
}
public function getCodeM(){
	return $this->codeM;
}
public function getNbr(){
	return $this->nbr;
}

public function setCin($cin){
	 $this->cinP=$cin;
}
public function setIdc($idC){
    $this->idC=$idC;
}
public function setJour($jour){
    $this->jour = $jour;
}

public function setCodeM($code){
        $this->codeM = $code;
    }

public function setNbr($nbr){
        $this->nbr = $nbr;
    }
    public function setDate($date){
        $this->date = $date;
    }

}?>