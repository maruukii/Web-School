<head><link rel="stylesheet" href="../resources/style.css"><script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script></head>
<body>
<?php session_start(); 
if(!(isset($_SESSION['nomP']))){
          header("Location:../index.php");}
    ?>
<section class="home">
<?php
require_once('../../controllers/PersonnelController.php');
$clientCtr=new PersonnelController();
$res=$clientCtr->liste_SUR();
echo "<fieldset>
<legend>Gestion des Surveillants </legend><table border=1>
    <tr>
    <th>Numero CIN</th>
     <th>Nom </th>
      <th>Prenom </th>
      <th>Grade </th>
     <th>Telephone </th>
     <th>Password </th>
      <th>Modifier</th>
  <th>Supprimer</th></tr>";
 foreach($res as $ligne){
    echo "<tr><td>{$ligne['CIN']}</td>
    <td>{$ligne['nomP']}</td>
    <td>{$ligne['prenomP']}</td>
    <td>{$ligne['grade']}</td>
    <td>{$ligne['num_telephone']}</td>
    <td>{$ligne['password']}</td>
    <td><a href ='modif.php?id={$ligne['CIN']}'>Modifier</a></td>
    <td><a href='sup.php?id={$ligne['CIN']}'>Supprimer</a></td></tr>";
  }
echo "</table></fieldset>";?><div class='task'><i class="fa-solid fa-house" ></i><a href="Directeur.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>