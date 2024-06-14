<?php
include_once('../../models/horaire.php') ;
include_once('../../database/config.php');
class HoraireController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(horaire $c){

$query="insert into horaire(CIN,codeM,idClasse,nombreH) values(?, ?,?, ?)";
$res=$this->pdo->prepare($query);
$aryy =array($c->getCin(),$c->getCodeM(),$c->getIdc(),$c->getNbr()) ;
//var_dump($aryy);
return $res->execute($aryy);

}

/*function insertJour(horaire $c){

    $query="insert into horaire(jour) values(?)";
    $res=$this->pdo->prepare($query);
    $aryy =array($c->getNbr()) ;
    //var_dump($aryy);
    return $res->execute($aryy);
    
    }*/
    function getId($cin){
        $query="SELECT * FROM horaire WHERE CIN = ? order by idH desc limit 1";
        $res = $this->pdo->prepare($query);
        $res->execute(array($cin));
        $array= $res->fetch();
        return $array;
    }
function getHoraire($cin){
    $query="SELECT * FROM horaire WHERE CIN = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($cin));
    $array= $res->fetch();
    return $array;
}
function delete($id) {
$query = "Delete from horaire where idH=?";
$res=$this->pdo->prepare($query);
$res->execute(array($id));
}
function del($cin) {
    $query = "Delete from horaire where CIN=?";
    $res=$this->pdo->prepare($query);
    $res->execute(array($cin));
    }
function liste($cin){
$query = "select * from horaire where CIN=? order by idH desc limit 1, 1";
$res=$this->pdo->prepare($query);
$res->execute(array($cin));
return $res;
}
function liste1($cin){
    $query = "select * from horaire where CIN=? order by idH desc limit 1";
    $res=$this->pdo->prepare($query);
    $res->execute(array($cin));
    return $res;
    }
function modify(horaire $c)
{
$sql = "UPDATE horaire SET  CIN=?, codeM=?,nombreH=?,dateModif=NOW() WHERE idH=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($c->getCin(),$c->getCodeM(),$c->getNbr(),$c->getId()));
}

function insertion($c,$i)
{
$sql = "UPDATE horaire SET  jour=?,dateModif=NOW() WHERE idH=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($c,$i));
}
}

?>