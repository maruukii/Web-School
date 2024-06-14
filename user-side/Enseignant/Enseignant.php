<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script> 
    $(document).ready(function(){
      $("#flip").click(function(){
        $("#panel").slideToggle("slow");
      });
    });
  </script>
</head>
<body>
<div id="flip">Voir les Notifications</div>
<div id="panel">
  <?php session_start();
   require_once('../../controllers/NotificationController.php');
$clientCtr=new NotificationController();
$res=$clientCtr->liste_allE();
echo "
<legend>Liste des Notifications</legend><table border=0>
<tr style='background-color:red'><th>Id </th><th>Contenu de Notif</th></tr>";
foreach($res as $ligne){
  echo "<tr style='background-color:green'><td class='id'>{$ligne['id']}</td>
  <td class='id' style='max-width:250px'>{$ligne['notif']}</td></tr>";
}
echo "</table>";?></div>
<section class="home">
        <h2><?php 
echo "<h5 style='text-decoration:underline;color:purple'>Bonjour, ".$_SESSION['nomP']." ".$_SESSION['prenomP']."!</h5>";
if(!(isset($_SESSION['nomP']))){
    header("Location:../index.php");}
?></h2>
<div class='task'><a href="registre.php">Registre De Présence</a></div><br>
<div class='task'><a href="deposer.php">Déposer Les Note Des Élèves</a></div><br>
<div class='task'><a href="Emploi.php">Consulter L'Emploi du Temps</a></div><br>
<h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4>

<div class="bg"></div></section>
</body>
</html>