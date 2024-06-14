<?php

class note {
private $idN,$idE,$code,$dc,$ds,$tp;
function __construct($idE="",$code="",$dc="",$ds="",$tp="") {
    $this->ds=$ds;
    $this->dc=$dc;
    $this->idE=$idE;
    $this->code=$code;
    $this->tp=$tp;
}
public function getCode(){
	return $this->code;
}

public function getIdn(){
	return $this->idC;
}

public function getIde(){
	return $this->idE;
}

public function getDc(){
	return $this->dc;
}
public function getDs(){
	return $this->ds;
}
public function getTp(){
	return $this->tp;
}

public function setIdn($idC){
        $this->idC = $idC;
    }

public function setIde($idE){
        $this->idE = $idE;
    }

public function setCode($code){
        $this->code = $code;
    }

 public function setDc($dc){
        $this->dc = $dc	;
    }
public function setDs($ds){
        $this->ds = $ds	;
    }
public function setTp($tp){   
        $this->tp = $tp	;
    }
}?>