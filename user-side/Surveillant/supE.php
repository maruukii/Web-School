<?php
require_once('../../controllers/EleveController.php');
$clientCtr=new EleveController();
$res=$clientCtr->getEleve($_GET['id']);
$clientCtr->delete($_GET['id']);
header("Location:gestionE.php?p=0");
?>
