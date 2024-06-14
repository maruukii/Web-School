<?php
include_once('../../models/note.php') ;
include_once('../../database/config.php');
class NoteController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(note $c){

$query="insert into note(ID,codeEleve,noteDC,noteDS,noteTP) values(?, ?, ?,?,?)";
$res=$this->pdo->prepare($query);
$aryy =array($c->getIde(),$c->getCode(),$c->getDc(),$c->getDs(),$c->getTp()) ;
//var_dump($aryy);
return $res->execute($aryy);

}
function attribut($c,$s,$t,$code){

    $query="UPDATE note SET noteDC=?,noteDS=?,noteTP=? WHERE codeEleve=?";
    $res=$this->pdo->prepare($query);
    $aryy =array($c,$s,$t,$code) ;
    //var_dump($aryy);
    return $res->execute($aryy);
    
    }
    function getTrue($i){
        $query="SELECT * FROM note WHERE ID = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($i));
        $array= $res->fetch();
        return $array;
    }

function getNote($id){
    $query="SELECT * FROM note WHERE idNote = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function getN($code,$id){
    $query="SELECT * FROM note WHERE codeEleve = ? and ID=?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($code,$id));
    $array= $res->fetch();
    return $array;
}

function delete($code) {
$query = "Delete from note where idNote=?";
$res=$this->pdo->prepare($query);
$res->execute(array($code));
}
function listeN($c){
    $query = "select * from note where codeEleve=?";
    $res=$this->pdo->prepare($query);
    $res->execute(array($c));
    return $res;
    }
function liste(){
    $query = "select * from note";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
    }
function modifier(note $c)
{
$sql = "UPDATE note SET  nomEleve=?, prenomEleve=?,age=?,specialité=? WHERE codeEleve=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($c->getNom(),$c->getPrenom(),$c->getAge(),$c->getSpec(),$c->getCode()));
}


}

?>
