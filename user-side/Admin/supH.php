<?php
session_start();
require_once('../../controllers/HoraireController.php');
$clientCtr=new HoraireController();
$clientCtr->delete($_SESSION['idh']);
if(isset($_SESSION['ch'])){
    if($_SESSION['ch']=="s"){
unset($_SESSION['ch']);
header("Location:emploiS.php?x=0");}
else{
    unset($_SESSION['ch']);
    header("Location:emploiE.php?x=0");   
}} 

?>
