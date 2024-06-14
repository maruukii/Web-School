<head><link rel="stylesheet" href="../resources/style.css"><script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script></head>
<body>
<section class="home">
<?php session_start();
if(!(isset($_SESSION['nomP']))){
          header("Location:../index.php");}
    ?>
<?php
require_once('../../controllers/EnseignementController.php');
$clientCtr=new EnseignementController();
$res=$clientCtr->liste();
echo "<fieldset>
<legend>Attributions Des Enseignants</legend><table border=1>";


echo"<tr>
    <th>ID</th>
     <th>CIN Enseignant</th>
      <th>ID Classe</th>
     <th>Code Matière</th>
  <th>Supprimer</th></tr>";
 foreach($res as $ligne){
    echo "<tr><td>{$ligne['ID']}</td>
    <td>{$ligne['CIN']}</td>
    <td>{$ligne['idClasse']}</td>
    <td>{$ligne['codeM']}</td>
    <td><a href='supAtt.php?id={$ligne['ID']}'>Supprimer</a></td></tr>";
  }
  
echo "</table></fieldset>";?><div class='task'><i class="fa-solid fa-house" ></i><a href="Surveillant.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>