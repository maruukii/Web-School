<?php
include_once('../../models/personnel.php') ;
include_once('../../database/config.php');
class PersonnelController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(personnel $c){

$query="insert into personnel values(?, ?, ?, ?, ?, ?)";
$res=$this->pdo->prepare($query);
$aryy =array($c->getNcin(),$c->getNom(),$c->getPrenom(),$c->getGrade(),$c->getPassword(),$c->getTel()) ;
//var_dump($aryy);
return $res->execute($aryy);

}

function getPersonnel($id ,$pass,$choix){
    $query="SELECT * FROM personnel WHERE CIN = ? and password=? and grade =?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id,$pass,$choix));
    $array= $res->fetch();
    return $array;
}
function getPers($id){
    $query="SELECT * FROM personnel WHERE CIN = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($idPersonnel) {
$query = "Delete from personnel where CIN=?";
$res=$this->pdo->prepare($query);
$res->execute(array($idPersonnel));
}
function liste_SUR(){
$query = "select * from personnel where grade='Surveillant' or grade='Directeur'";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}

function liste_All(){
    $query = "select * from personnel";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
    }
function liste_ENS(){
    $query = "select * from personnel where grade=\"Enseignant\"";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
    }
function modifier_user(personnel $c)
{
$sql = "UPDATE personnel SET  nomP=?, prenomP=?,num_telephone=?,password=? WHERE CIN=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($c->getNom(),$c->getPrenom(),$c->getTel(),$c->getPassword(),$c->getNcin()));
}


}

?>


	