<?php
include_once('../../models/matiere.php') ;
include_once('../../database/config.php');
class MatiereController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(matiere $c){

$query="insert into matiere values(?, ?, ?)";
$res=$this->pdo->prepare($query);
$aryy =array($c->getCodeM(),$c->getNomM(),$c->getCoeff()) ;
//var_dump($aryy);
return $res->execute($aryy);

}

function getMatiere($code){
    $query="SELECT * FROM matiere WHERE codeM = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($code));
    $array= $res->fetch();
    return $array;
}
function getMat($code){
    $query = "SELECT nomM FROM matiere WHERE codeM = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($code));
    $array = $res->fetch(PDO::FETCH_COLUMN);
    return $array;
}
function delete($code) {
$query = "Delete from matiere where codeM=?";
$res=$this->pdo->prepare($query);
$res->execute(array($code));
}
function liste(){
$query = "select * from matiere";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function modify(matiere $c)
{
$sql = "UPDATE matiere SET  nomM=?, coeff=? WHERE codeM=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($c->getNomM(),$c->getCoeff(),$c->getCodeM()));
}


}

?>