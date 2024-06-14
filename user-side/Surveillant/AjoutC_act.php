<?php
require_once('../../controllers/ClasseController.php');
require_once('../../models/classe.php');
$nom=$_POST['nom'];
$id=$_POST['id'];
$classe=new classe($id,$nom);
$eleveCtr=new ClasseController();
$res=$eleveCtr->insert($classe);
header("Location:gestionC.php");
?>