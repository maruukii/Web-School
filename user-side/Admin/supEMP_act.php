<?php
session_start();
require_once('../../controllers/HoraireController.php');
$clientCtr=new HoraireController();
$clientCtr->del($_POST['choix1']);
header("Location:supEMP.php?p=0");
?>
