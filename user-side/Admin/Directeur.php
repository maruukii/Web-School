<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/style.css">
</head>
<body>

    <section class="home">
        <h2><?php session_start();
echo "<h5 style='text-decoration:underline;color:purple'>Bonjour, ".$_SESSION['nomP']." ".$_SESSION['prenomP']."!</h5>";
  /*                  echo "<div class=\"notification-bar\">
  <p>Message de notification</p>
  <button class=\"close-button\">X</button>
 <script>
const notificationBar = document.querySelector('.notification-bar');
const closeButton = document.querySelector('.close-button');

function hideNotification() {
  notificationBar.style.display = 'none';
}

function showNotification() {
  notificationBar.style.display = 'block';
}
closeButton.addEventListener('click', hideNotification);

showNotification();</script>
</div>";*/
        if(!(isset($_SESSION['nomP']))){
          header("Location:../index.php");}
    ?></h2>
<div class='task'><a href="AjoutP.php">Ajout d'un Personnel</a></div><br>
    <div class='task'><a href="gestionENS.php">Gestion des Enseignants</a></div><br>
   <div class='task'><a href="gestionSUR.php">Gestion des Surveillants</a></div><br>
   <div class='task'><a href="gestionM.php">Gestion des Matières</a></div><br>
   <div class='task'><a href="notif.php">Créer une Notification</a></div><br>
   <div class='task'><a href="emploiE.php">Gestion des Horaires de travail des Enseignants</a></div><br>
   <div class='task'><a href="emploiS.php">Gestion des Horaires de travail des Surveillants et Directeur</a></div><br>
   
   <h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4>
   
   <div class="bg"></div></section>
</body>
</html>