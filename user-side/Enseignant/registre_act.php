<?php
session_start();
require_once('../../controllers/RegistreController.php');
require_once('../../controllers/ClasseController.php');
require_once('../../controllers/EnseignementController.php');
require_once('../../controllers/EleveController.php');
require_once('../../models/registre.php');
$i=0;
$personCtr=new RegistreController();
$ele=new EleveController();
$clientCtr=new EnseignementController();
$id=$clientCtr->getIDE($_SESSION['ncin'],$_SESSION['codeM'],$_SESSION['classe']);
$classe=new ClasseController();
$res=$ele->listeClasse($_SESSION['classe']);
$nbr=$classe->getNombre($_SESSION['classe']);
foreach($res as $ligne){
$val1="absent".strval($i);
if(isset($_POST[$val1])){
$t=$personCtr->getEle($id['ID'],$ligne['codeEleve']);
if(!($t)){
$registre=new registre($id['ID'],$ligne['codeEleve']);
$x=$personCtr->insert($registre);}
else{
    $registre=new registre($id['ID'],$ligne['codeEleve']);
    $x=$personCtr->insert($registre);
    $personCtr->modifNbrINC($id['ID'],$ligne['codeEleve']);
    $f=$personCtr->GetEle($id['ID'],$ligne['codeEleve']);
    $personCtr->modifDernier($f['nbrA']);
}}
$i++;}
header("Location:registre.php?x=0");
?>