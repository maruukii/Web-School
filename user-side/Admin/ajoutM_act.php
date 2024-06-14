<?php
require_once('../../controllers/MatiereController.php');
require_once('../../models/matiere.php');
$codeM=$_POST['codeM'];
$nomM=$_POST['nomM'];
$coeff=$_POST['coeff'];
$person=new matiere($codeM,$nomM,$coeff);
$personCtr=new MatiereController();
$res=$personCtr->insert($person);
header("Location:gestionM.php");
?>