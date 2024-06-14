<?php
include_once('../../models/eleve.php') ;
include_once('../../database/config.php');
class EleveController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(eleve $c){

$query="insert into eleve(codeEleve,nomEleve,prenomEleve,age,specialité) values(?, ?, ?, ?,?)";
$res=$this->pdo->prepare($query);
$aryy =array($c->getCode(),$c->getNom(),$c->getPrenom(),$c->getAge(),$c->getSpec()) ;
//var_dump($aryy);
return $res->execute($aryy);

}
function attribut($c,$n){

    $query="UPDATE eleve SET  idClasse=? WHERE codeEleve=?";
    $res=$this->pdo->prepare($query);
    $aryy =array($n,$c) ;
    //var_dump($aryy);
    return $res->execute($aryy);
    
    }
function getEleve($code){
    $query="SELECT * FROM eleve WHERE codeEleve = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($code));
    $array= $res->fetch();
    return $array;
}

function delete($code) {
$query = "Delete from eleve where codeEleve=?";
$res=$this->pdo->prepare($query);
$res->execute(array($code));
}

function liste(){
    $query = "select * from eleve";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
    }
    function listeClasse($i){
        $query = "select * from eleve where idClasse=?";
        $res=$this->pdo->prepare($query);
        $res->execute(array($i));
        return $res;
        }
    

function modifier(eleve $c)
{
$sql = "UPDATE eleve SET  nomEleve=?, prenomEleve=?,age=?,specialité=? WHERE codeEleve=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($c->getNom(),$c->getPrenom(),$c->getAge(),$c->getSpec(),$c->getCode()));
}


}

?>


	