<?php
include_once('../../models/classe.php') ;
include_once('../../database/config.php');
class ClasseController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(classe $c){
$query="insert into classe(idClasse,nomClasse) values(?,?)";
$res=$this->pdo->prepare($query);
$aryy =array($c->getId(),$c->getNom()) ;
//var_dump($aryy);
return $res->execute($aryy);
}
function modifNbrINC($id){
    $query="update classe set nombreE=nombreE+1 WHERE idClasse = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
}
function modifNbrDEC($id){
    $query="update classe set nombreE=nombreE-1 WHERE idClasse = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
}
function getClasse($id){
    $query="SELECT distinct idClasse,nomClasse FROM classe WHERE idClasse = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}

function getCla($id){
    $query = "SELECT nomClasse FROM classe WHERE idClasse = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array = $res->fetch(PDO::FETCH_COLUMN);
    return $array;
}
function getNombre($id){
    $query="SELECT nombreE FROM classe WHERE idClasse = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}

function delete($id) {
$query = "Delete from classe where idClasse=?";
$res=$this->pdo->prepare($query);
$res->execute(array($id));
}

function liste(){
    $query = "select * from classe";
    $res=$this->pdo->prepare($query);
    $res->execute();
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