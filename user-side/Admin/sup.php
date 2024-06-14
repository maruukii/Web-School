<?php
require_once('../../controllers/PersonnelController.php');
$clientCtr=new PersonnelController();
$res=$clientCtr->getPers($_GET['id']);
$clientCtr->delete($_GET['id']);
if($res['grade']=='Enseignant'){
    header("Location:gestionENS.php");}
else{header("Location:gestionSUR.php");}
?>
