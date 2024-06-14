<?php
require_once('../../controllers/PersonnelController.php');
require_once('../../models/personnel.php');
$clientCtr=new PersonnelController();
$client=new personnel();
$client->setNcin($_POST['ncin']);
$client->setNom($_POST['nom']);
$client->setPrenom($_POST['prenom']);
$client->setTel($_POST['tel']);
$client->setPassword($_POST['pass']);
$clientCtr->modifier_user($client);
$res=$clientCtr->getPers($_POST['ncin']);
if($res['grade']=='Enseignant'){
    header("Location:gestionENS.php");}
    else {header("Location:gestionSUR.php");}
?>