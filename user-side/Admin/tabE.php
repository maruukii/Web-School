<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/style.css">
    <script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="home" id="home">
 <div class="xd">
<?php
session_start();
if(!(isset($_SESSION['nomP']))){
    header("Location:../index.php");}
    require_once('../../controllers/MatiereController.php');
require_once('../../controllers/HoraireController.php');
require_once('../../controllers/ClasseController.php');
$cl=new ClasseController();
$clientCtr=new HoraireController();
$mat=new MatiereController();
$res=$clientCtr->liste1($_SESSION['cin']);

echo "<fieldset>".$_SESSION['string']."
<table border=1>
    <tr>
    <th>Jour/Séance</th>
    <th>[8:00 10:00]</th>
     <th>[10:00 12:00]</th>
      <th>[12:00 14:00]</th>
     <th>[14:00 16:00]</th>
     <th>[16:00 18:00]</th></tr><tr>";
     $jour=array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi');
     $k=0;
 foreach($res as $ligne){
    $array=explode(",",$ligne['jour']);
    $string0=explode(":",$array[0]);
    $string1=explode(":",$array[1]);
    $string2=explode(":",$array[2]);
    $string3=explode(":",$array[3]);
    $string4=explode(":",$array[4]);
    $string5=explode(":",$array[5]);
    for($i=0;$i<24;$i=$i+4){
    ${'s'.$i}=explode("/",${'string'.$k}[0]);
    ${'s'.($i+1)}=explode("/",${'string'.$k}[1]);
    ${'s'.($i+2)}=explode("/",${'string'.$k}[2]);
    ${'s'.($i+3)}=explode("/",${'string'.$k}[3]);
    $k++;
    }
    $m=0;
    for($j=0;$j<24;$j=$j+4){
    echo "<td style='height:40px'>".$jour[$m]."</td>";
    echo "<td style='height:60px;";if(${'s'.$j}[0]=='s1') {echo "background-color:green;";}echo "'>".${'s'.$j}[1]."-".$mat->getMat(${'s'.$j}[1])."<br>".$cl->getCla(${'s'.$j}[2])."</td>";
    echo "<td style='height:60px;";if(${'s'.($j+1)}[0]=='s2') {echo "background-color:green;";}echo "'>".${'s'.($j+1)}[1]."-".$mat->getMat(${'s'.($j+1)}[1])."<br>".$cl->getCla(${'s'.($j+1)}[2])."</td>";
    echo "<td style='background-color:grey'></td>";
    echo "<td style='height:60px;";if(${'s'.($j+2)}[0]=='s3') {echo "background-color:green;";}echo "'>".${'s'.($j+2)}[1]."-".$mat->getMat(${'s'.($j+2)}[1])."<br>".$cl->getCla(${'s'.($j+2)}[2])."</td>";
    echo "<td style='height:60px;";if(${'s'.($j+3)}[0]=='s4') {echo "background-color:green;";}echo "'>".${'s'.($j+3)}[1]."-".$mat->getMat(${'s'.($j+3)}[1])."<br>".$cl->getCla(${'s'.($j+3)}[2])."</td>";
    echo "</tr>";
$m++;}
 }
 echo "</table></fieldset>";
?>
</div>
<div class='task'><i class="fa-solid fa-house" ></i><a href="Directeur.php">Acceuil</a></div><h4 style='bottom:15%'><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>