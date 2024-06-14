<?php
include_once('../../models/enseignement.php') ;
include_once('../../database/config.php');
class EnseignementController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(enseignement $c){

$query="insert into enseignement(CIN,idClasse,codeM) values(?, ?, ?)";
$res=$this->pdo->prepare($query);
$aryy =array($c->getCin(),$c->getIdC(),$c->getCode()) ;
//var_dump($aryy);
return $res->execute($aryy);
}

function getEnseignement($id){
    $query="SELECT * FROM enseignement WHERE ID = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function getIDE($c,$code,$i){
    $query="SELECT ID FROM enseignement WHERE CIN = ? and codeM=? and idClasse=?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($c,$code,$i));
    $array= $res->fetch();
    return $array;
}
function delete($id) {
$query = "Delete from enseignement where ID=?";
$res=$this->pdo->prepare($query);
$res->execute(array($id));
}

function liste(){
$query = "select * from enseignement";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function listeENS($c){
    $query = "select * from enseignement where CIN=?";
    $res=$this->pdo->prepare($query);
    $res->execute(array($c));
    return $res;
    }
    function listeENSD($c){
        $query = "select distinct idClasse from enseignement where CIN=?";
        $res=$this->pdo->prepare($query);
        $res->execute(array($c));
        return $res;
        }
        function listeENSM($c){
            $query = "select distinct codeM from enseignement where CIN=?";
            $res=$this->pdo->prepare($query);
            $res->execute(array($c));
            return $res;
            }

function modifier_user(enseignement $c)
{
$sql = "UPDATE enseignement SET  codeM=?, idClasse=?, WHERE CIN=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($c->getCode(),$c->getIdC(),$c->getCin()));
}


}

?>


	