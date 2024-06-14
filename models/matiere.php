<?php

class matiere {
private $codeM,$nomM,$coeff;
function __construct($codeM="",$nomM="",$coeff="") {
	
    $this->codeM=$codeM;
    $this->nomM=$nomM;
    $this->coeff=$coeff;
    
}

public function getCodeM(){
	return $this->codeM;
}

public function getNomM(){
	return $this->nomM;
}

public function getCoeff(){
	return $this->coeff;
}


public function setNomM($nomM){
        $this->nomM = $nomM;
    }

public function setCodeM($codeM){
        $this->codeM = $codeM;
    }

public function setCoeff($coeff){
        $this->coeff = $coeff;
    }

}?>