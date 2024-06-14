<?php

class eleve {
private $codeE,$nomE,$prenomE,$age,$spec;
function __construct($codeE="",$nomE="",$prenomE="",$age="",$spec="") {
	
    $this->codeE=$codeE;
    $this->nomE=$nomE;
    $this->prenomE=$prenomE;
    $this->age=$age;
    $this->spec=$spec;
}
public function getCode(){
	return $this->codeE;
}

public function getNom(){
	return $this->nomE;
}

public function getPrenom(){
	return $this->prenomE;
}

public function getAge(){
	return $this->age;
}
public function getSpec(){
	return $this->spec;
}


public function setNom($nomE){
        $this->nomE = $nomE;
    }

public function setCode($codeE){
        $this->codeE = $codeE;
    }

public function setPrenom($prenomE){
        $this->prenomE = $prenomE;
    }

 public function setAge($age){
        $this->age = $age	;
    }
public function setSpec($spec){
        $this->spec = $spec	;
    }
}?>