<?php
session_start();
if(isset($_SESSION["nomP"])){
session_destroy();
}
require_once('../../controllers/PersonnelController.php');
$ncin=$_POST['ncin'];
$_SESSION['ncin']=$ncin;
$password=$_POST['password'];
$choix=$_POST['choix'];
$clientCtr=new PersonnelController();
$res=$clientCtr->getPersonnel($ncin,$password,$choix);
$_SESSION['nomP']=$res['nomP'];
$_SESSION['prenomP']=$res['prenomP'];
if($res){
    if($choix=='Directeur'){
        $_SESSION['nomP']=$res['nomP'];
$_SESSION['prenomP']=$res['prenomP'];
    header('Location:../Admin/Directeur.php');
}   
    if($choix=='Surveillant'){
        $_SESSION['nomP']=$res['nomP'];
$_SESSION['prenomP']=$res['prenomP'];
    header('Location:../Surveillant/Surveillant.php');
}
if($choix=='Enseignant'){
    $_SESSION['nomP']=$res['nomP'];
$_SESSION['prenomP']=$res['prenomP'];
    header('Location:../Enseignant/Enseignant.php');
}
}
if($res==null){
    header("Location:../index.php?b=0");
    
}
?>