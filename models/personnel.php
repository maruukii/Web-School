<?php

class personnel {
private $ncin,$nom,$prenom,$telephone,$grade,$password;
function __construct($ncin="",$nom="",$prenom="",$grade="",$password="",$telephone="") {
	
    $this->ncin=$ncin;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->grade=$grade;
    $this->password=$password;
    $this->telephone=$telephone;
}

public function getNcin(){
	return $this->ncin;
}

public function getNom(){
	return $this->nom;
}

public function getPrenom(){
	return $this->prenom;
}

public function getTel(){
	return $this->telephone;
}
public function getGrade(){
	return $this->grade;
}
public function getPassword(){
	return $this->password;
}

public function setNom($nom){
        $this->nom = $nom;
    }

public function setNcin($ncin){
        $this->ncin = $ncin;
    }

public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

 public function setTel($telephone){
        $this->telephone = $telephone	;
    }
public function setPassword($password){
        $this->password = $password	;
    }
public function setGrade($grade){
        $this->grade = $grade	;
    }
}?>