<?php
require_once('../../controllers/EleveController.php');
require_once('../../models/eleve.php');
$clientCtr=new EleveController();
$client=new eleve();
$client->setCode($_POST['code']);
$client->setNom($_POST['nom']);
$client->setPrenom($_POST['prenom']);
$client->setAge($_POST['age']);
$client->setSpec($_POST['spec']);
$clientCtr->modifier($client);
header("Location:gestionE.php?x=0");
?>