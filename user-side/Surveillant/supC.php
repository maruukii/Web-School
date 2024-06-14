<?php
require_once('../../controllers/ClasseController.php');
$clientCtr=new ClasseController();
$res=$clientCtr->getClasse($_GET['id']);
$clientCtr->delete($_GET['id']);
header("Location:gestionC.php?p=0");
?>
