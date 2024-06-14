<?php
require_once('../../controllers/MatiereController.php');
$clientCtr=new MatiereController();
$res=$clientCtr->getMatiere($_GET['codeM']);
$clientCtr->delete($_GET['codeM']);
header("Location:gestionM.php");
?>
