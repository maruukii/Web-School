<?php
include_once('../../models/registre.php') ;
include_once('../../database/config.php');
class RegistreController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(registre $c){
$query="insert into registre(idE,codeEleve) values(?,?)";
$res=$this->pdo->prepare($query);
$aryy =array($c->getIde(),$c->getCode()) ;
//var_dump($aryy);
return $res->execute($aryy);
}
function setNbr($x,$n){
    $query="update registre set nbrA =? where ID=?";
    $res=$this->pdo->prepare($query);
    $aryy =array($x,$n) ;
    //var_dump($aryy);
    return $res->execute($aryy);
    }
    function GetPremier($i,$id){
        $query = "select nbrA from registre where codeEleve=? and idE=? ORDER BY ID ASC limit 1";
        $res=$this->pdo->prepare($query);
        $res->execute(array($i,$id));
        $array= $res->fetch();
    return $array;
        }
function modifNbrINC($i,$c){
    $query="update registre set nbrA=nbrA+1 WHERE idE = ? and codeEleve=?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($i,$c));
}
function modifDernier($nbr){
    $query="update registre set nbrA=? ORDER BY ID DESC LIMIT 1";
    $res = $this->pdo->prepare($query);
    $res->execute(array($nbr));
}
function getID($i,$c){
    $query="SELECT * FROM registre WHERE idE = ? and codeEleve=? limit 1";
    $res = $this->pdo->prepare($query);
    $res->execute(array($i,$c));
    $array= $res->fetch();
    return $array;
}
function getAbsence($id){
    $query="SELECT * FROM registre WHERE ID = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}

function getEle($i,$c){
    $query="SELECT * FROM registre WHERE idE = ? and codeEleve=?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($i,$c));
    $array= $res->fetch();
    return $array;
}

function delete($id) {
$query = "Delete from classe where idClasse=?";
$res=$this->pdo->prepare($query);
$res->execute(array($id));
}

function liste($i,$id){
    $query = "select * from registre where codeEleve=? and idE=?";
    $res=$this->pdo->prepare($query);
    $res->execute(array($i,$id));
    return $res;
    }


function modifier(classe $c)
{
$sql = "UPDATE classe SET nomClasse=?  WHERE idClasse=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($c->getNom(),$c->getId()));
}


}

?>