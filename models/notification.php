<?php

class notification {
private $type,$choix,$nom,$sujet,$notif;
function __construct($type="",$sujet="",$notif="") {
	
    $this->type=$type;
    $this->sujet=$sujet;
    $this->notif=$notif;
    
}

public function getType(){
	return $this->type;
}

public function getSujet(){
	return $this->sujet;
}
public function getNotif(){
	return $this->notif;
}

public function setType($type){
	 $this->type=$type;
}

public function setSujet($sujet){
        $this->sujet = $sujet;
    }

public function setNotif($notif){
        $this->notif = $notif;
    }

}?>