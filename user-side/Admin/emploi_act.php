<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/style.css">
</head>
<body>
<section class="home" id="home">
 <div class="xd">
<?php
session_start();
require_once('../../controllers/PersonnelController.php');
require_once('../../controllers/HoraireController.php');
require_once('../../models/horaire.php');
if(isset($_POST['choix2'])){
$classe=$_POST['choix3'];
$codeM=$_POST['choix2'];
$cin=$_POST['choix1'];
$nbr=$_POST['nbr'];
$_SESSION['cl']=$classe;
$_SESSION['mat']=$codeM;
$clientCtr=new PersonnelController();
$res1=$clientCtr->getPers($cin);
$person=new horaire($cin,$codeM,$classe,$nbr);
$personCtr=new HoraireController();}
else{
    $cin=$_POST['choix1'];
    $nbr=$_POST['nbr'];  
    $clientCtr=new PersonnelController();
$res1=$clientCtr->getPers($cin);
$person=new horaire($cin,NULL,NULL,$nbr);
$personCtr=new HoraireController();
}
$res=$personCtr->insert($person);

$_SESSION['nbr']=$nbr;
$_SESSION['cin']=$cin;
$_SESSION['string']="<legend style='text-decoration:underline;color:purple;'>Horaire De Travail De ".$res1['nomP']." , ".$res1['prenomP']."!</legend>";
header('Location:seance.php');
?>