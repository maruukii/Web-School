<?php
require_once('../../controllers/EleveController.php');
require_once('../../models/eleve.php');
$code=$_POST['codeM'];
$nom=$_POST['nomM'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
$spec=$_POST['spec'];
$eleve=new eleve($code,$nom,$prenom,$age,$spec);
$eleveCtr=new EleveController();
$res=$eleveCtr->insert($eleve);
header("Location:gestionE.php");
?>