<?php
require_once('../../controllers/PersonnelController.php');
require_once('../../models/personnel.php');
$ncin=$_POST['ncin'];
$nom=$_POST['nomP'];
$prenom=$_POST['prenomP'];
$grade=$_POST['grade'];
$pass=$_POST['password'];
$telephone=$_POST['numTel'];
$person=new personnel($ncin,$nom,$prenom,$grade,$pass,$telephone);
$personCtr=new PersonnelController();
$res=$personCtr->insert($person);
if($grade=='Enseignant'){
header("Location:gestionENS.php");}
else {header("Location:gestionSUR.php");}
?>