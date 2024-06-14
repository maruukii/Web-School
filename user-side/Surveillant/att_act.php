<?php
require_once('../../controllers/EleveController.php');
require_once('../../controllers/ClasseController.php');
$code=$_POST['code'];
$id=$_POST['choix1'];
$eleveCtr=new EleveController();
$res1=$eleveCtr->getEleve($code);
$res=$eleveCtr->attribut($code,$id);
$test=new ClasseController();
if($res1['idClasse']==NULL){
$test->modifNbrINC($id);}
else if($res1['idClasse']!=$id) {
    $test->modifNbrDEC($res1['idClasse']);
    $test->modifNbrINC($id);
}
header("Location:gestionE.php?c=0");
?>