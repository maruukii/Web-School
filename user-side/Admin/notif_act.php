<?php
require_once('../../controllers/NotificationController.php');
require_once('../../models/notification.php');
$type=$_POST['type'];
$sujet=$_POST['sujet'];
if(isset($_POST['notification']) && !empty($_POST['notification'])) {
    $notif=$_POST['notification'];
    $person=new notification($type,$sujet,$notif);
    $personCtr=new NotificationController();
    $res=$personCtr->insert($person);
    header("Location:listeNotifD.php");
  } else {
    header("Location:notif.php");
  }
?>
