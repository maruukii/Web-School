<?php
require_once('../../controllers/NotificationController.php');
$clientCtr=new NotificationController();
$res=$clientCtr->getNotification($_GET['id']);
$clientCtr->delete($_GET['id']);
header("Location:listeNotifD.php");
?>