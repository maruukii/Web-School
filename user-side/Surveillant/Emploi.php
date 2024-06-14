<?php
session_start();
require_once('../../controllers/PersonnelController.php');
$cin=$_SESSION['ncin'];
$clientCtr=new PersonnelController();
$res1=$clientCtr->getPers($cin);
$_SESSION['cin']=$cin;
$_SESSION['string']="<legend style='text-decoration:underline;color:purple;'>Horaire De Travail De ".$res1['nomP']." , ".$res1['prenomP']."!</legend>";
 header('Location:tabS.php');
?>