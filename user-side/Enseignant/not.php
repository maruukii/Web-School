<?php
session_start();
$k=0;
require_once('../../controllers/EleveController.php');
$clientCtr=new EleveController();
$res=$clientCtr->listeClasse($_SESSION['classe']);
require_once('../../controllers/EnseignementController.php');
require_once('../../controllers/NoteController.php');
require_once('../../controllers/ClasseController.php');
$ens=new EnseignementController();
$clas=new ClasseController();
$t=$clas->getNombre($_SESSION['classe']);
require_once('../../models/note.php');
$quest=$ens->getIDE($_SESSION['ncin'],$_SESSION['matiere'],$_SESSION['classe']);
$q=$quest['ID'];
foreach($res as $ligne){
$personCtr=new NoteController();
$val1="moyenne".strval($k);
$val2="moyenne".strval($k+1);
$val3="moyenne".strval($k+2);
$dc=$_POST[$val1];
$ds=$_POST[$val2];
$tp=$_POST[$val3];
$k=$k+3;
$not=new note($q,$ligne['codeEleve'],$dc,$ds,$tp);
$res=$personCtr->insert($not);}
header("Location:deposer.php?x=0");
?>