<?php
require_once('../../controllers/EnseignementController.php');
require_once('../../models/enseignement.php');
$p=$_POST['choix1'];
$c=$_POST['choix2'];
$m=$_POST['choix3'];
$ens=new enseignement($p,$c,$m);
$eleveCtr=new EnseignementController();
$res=$eleveCtr->insert($ens);
header("Location:gestionEns.php");
?>