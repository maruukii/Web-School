<?php
require_once('../../controllers/EnseignementController.php');
$clientCtr=new EnseignementController();
$clientCtr->delete($_GET['id']);
header("Location:gestionEns.php");
?>