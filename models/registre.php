<?php
class registre {
private $id,$idE,$date,$nbrA,$codeE;
function __construct($idE="",$codeE="") {
    $this->idE=$idE;
    $this->codeE=$codeE;
}

public function getDate(){
	return $this->date;
}
public function getCode(){
	return $this->codeE;
}

public function getNbra(){
	return $this->nbrA;
}
public function getIde(){
	return $this->idE;
}
public function getId(){
	return $this->id;
}

public function setCode($code){
    $this->codeE = $code;
}
public function setDate($date){
        $this->date = $date;
    }
 public function setNbra($nbr){
        $this->nbrA = $nbr	;
    }
    public function setIde($id){
        $this->idE = $id	;
    }
public function setId($id){
        $this->id = $id	;
    }
}?>