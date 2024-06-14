<head><link rel="stylesheet" href="../resources/style.css"><script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script></head>
<body>
<section class="home">
<?php session_start();
if(!(isset($_SESSION['nomP']))){
          header("Location:../index.php");}
    ?>
<?php
require_once('../../controllers/ClasseController.php');
$clientCtr=new ClasseController();
$res=$clientCtr->liste();
echo "<fieldset>
<legend>Gestion Des Classes </legend><table border=1>";
if(isset($_GET['p'])){ echo "<span style='color:red;font-size:1.5rem'>Classe supprimé avec succés ! </span>";}
if(isset($_GET['x'])){ echo "<span style='color:red;font-size:1.5rem'>Classe modifié avec succés ! </span>";}
echo"<tr>
    <th>ID Classe</th>
     <th>Nom</th>
      <th>Nombre Élèves</th>
      <th>Modifier</th>
  <th>Supprimer</th></tr>";
 foreach($res as $ligne){
    echo "<tr><td>{$ligne['idClasse']}</td>
    <td>{$ligne['nomClasse']}</td>
    <td>{$ligne['nombreE']}</td>
    <td><a href ='modifC.php?id={$ligne['idClasse']}'>Modifier</a></td>
    <td><a href='supC.php?id={$ligne['idClasse']}'>Supprimer</a></td></tr>";
  }
  
echo "</table></fieldset>";?><div class='task'><i class="fa-solid fa-plus"></i><a href="ajoutc.php" style='font-size:2.2rem'>Ajout D'une Classe</a></div><div class='task'><i class="fa-solid fa-house" ></i><a href="Surveillant.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>