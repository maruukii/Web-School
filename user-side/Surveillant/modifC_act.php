<?php
require_once('../../controllers/ClasseController.php');
require_once('../../models/classe.php');
$clientCtr=new ClasseController();
$client=new classe();
$client->setId($_POST['id']);
$client->setNom($_POST['nom']);
$clientCtr->modifier($client);
header("Location:gestionC.php?x=0");
?>