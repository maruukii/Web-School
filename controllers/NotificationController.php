<?php
include_once('../../models/notification.php') ;
include_once('../../database/config.php');
class NotificationController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(notification $c){

$query="insert into notification(type,sujet,notif) values(?, ?, ?)";
$res=$this->pdo->prepare($query);
$aryy =array($c->getType(),$c->getSujet(),$c->getNotif()) ;
return $res->execute($aryy);

}
/*
function getPersonnel($id,$choix){
    $query="SELECT * FROM notification WHERE CIN = ? and password=? and grade =?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id,$pass,$choix));
    $array= $res->fetch();
    return $array;
}*/
function getNotification($id){
    $query="SELECT * FROM notification WHERE id = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($id) {
$query = "Delete from notification where id=?";
$res=$this->pdo->prepare($query);
$res->execute(array($id));
}
function liste_all(){
    $query = "select * from notification ";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
    }
    function liste_allE(){
        $query = "select * from notification where type='Enseignant' limit 5";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
        }
        function liste_allS(){
            $query = "select * from notification where type='Surveillant' limit 5";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
            }
            /*
function liste($type){
$query = "select * from notification where type=$type";
$res=$this->pdo->prepare($query);
$res->execute(array($type));
return $res;
}
function modifier_user(personnel $c)
{
$sql = "UPDATE personnel SET  nomP=?, prenomP=?,num_telephone=?,password=? WHERE CIN=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($c->getNom(),$c->getPrenom(),$c->getTel(),$c->getPassword(),$c->getNcin()));
}*/

}

?>