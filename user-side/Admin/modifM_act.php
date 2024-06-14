<?php
require_once('../../controllers/MatiereController.php');
require_once('../../models/matiere.php');
$clientCtr=new MatiereController();
$client=new matiere();
$client->setCodeM($_POST['codeM']);
$client->setNomM($_POST['nomM']);
$client->setCoeff($_POST['coeff']);
$clientCtr->modify($client);
$res=$clientCtr->getMatiere($_POST['codeM']);
header("Location:gestionM.php");
?>