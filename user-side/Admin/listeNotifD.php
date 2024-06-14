<head><link rel="stylesheet" href="../resources/style.css"><script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script></head>
<body>
<section class="home">
<?php
require_once('../../controllers/NotificationController.php');
$clientCtr=new NotificationController();
$res=$clientCtr->liste_all();
session_start();
if(!(isset($_SESSION['nomP']))){
  header("Location:../index.php");}
echo "<fieldset>
<legend>Liste des Notifications</legend><table border=0>
    <tr>
    <th>Id</th>
     <th>Groupe</th>
     <th>Sujet</th>
     <th>Notification</th>
  <th>Supprimer</th></tr>";
 foreach($res as $ligne){
    echo "<tr><td>{$ligne['id']}</td>
    <td>{$ligne['type']}</td>
    <td>{$ligne['sujet']}</td>
    <td style='max-width:300px'>{$ligne['notif']}</td>
    <td><a href='sup_notif.php?id={$ligne['id']}'>Supprimer</a></td></tr>";
  }
echo "</table></fieldset>";?><div class='task'><i class="fa-solid fa-house" ></i><a href="Directeur.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>