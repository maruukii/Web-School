<head><link rel="stylesheet" href="../resources/style.css"><script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script></head>
<body>
<section class="home">
<?php session_start();
if(!(isset($_SESSION['nomP']))){
          header("Location:../index.php");}
    ?>
<?php
require_once('../../controllers/EleveController.php');
$clientCtr=new EleveController();
$res=$clientCtr->liste();
echo "<fieldset>
<legend>Gestion Des Élèves </legend><table border=1>";
if(isset($_GET['p'])){ echo "<span style='color:red;font-size:1.5rem'>Élève supprimé avec succés ! </span>";}
if(isset($_GET['c'])){ echo "<span style='color:red;font-size:1.5rem'>Classe attribuée avec succés ! </span>";}
if(isset($_GET['x'])){ echo "<span style='color:red;font-size:1.5rem'>Élève modifié avec succés ! </span>";}
echo"<tr>
    <th>Code Élève</th>
     <th>Nom</th>
      <th>Prenom</th>
     <th>Age</th>
     <th>Specialité </th>
     <th>idClasse</th>
      <th>Modifier</th>
  <th>Supprimer</th></tr>";
 foreach($res as $ligne){
    echo "<tr><td>{$ligne['codeEleve']}</td>
    <td>{$ligne['nomEleve']}</td>
    <td>{$ligne['prenomEleve']}</td>
    <td>{$ligne['age']}</td>
    <td>{$ligne['specialité']}</td>
    <td>{$ligne['idClasse']}</td>
    <td><a href ='modifE.php?id={$ligne['codeEleve']}'>Modifier</a></td>
    <td><a href='supE.php?id={$ligne['codeEleve']}'>Supprimer</a></td></tr>";
  }
  
echo "</table></fieldset>";?><div class='task'><i class="fa-solid fa-plus"></i><a href="ajoutE.php" style='font-size:2.2rem'>Ajout D'un Élève</a></div><div class='task'><i class="fa-solid fa-house" ></i><a href="Surveillant.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>