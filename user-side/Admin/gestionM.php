<head><link rel="stylesheet" href="../resources/style.css"><script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script></head>
<body>
<section class="home">
<?php session_start();
if(!(isset($_SESSION['nomP']))){
          header("Location:../index.php");}
    ?>
<?php
require_once('../../controllers/MatiereController.php');
$clientCtr=new MatiereController();
$res=$clientCtr->liste();
echo "<fieldset>
<legend>Gestion des Matières </legend><table border=1>
    <tr>
    <th>Code Matière</th>
     <th>Nom </th>
      <th>coefficient </th>
      <th>Modifier</th>
  <th>Supprimer</th></tr>";
 foreach($res as $ligne){
    echo "<tr><td>{$ligne['codeM']}</td>
    <td>{$ligne['nomM']}</td>
    <td>{$ligne['coeff']}</td>
    <td><a href ='modifM.php?codeM={$ligne['codeM']}'>Modifier</a></td>
    <td><a href='supM.php?codeM={$ligne['codeM']}'>Supprimer</a></td></tr>";
  }
echo "</table></fieldset>";?><div class='task'><i class="fa-solid fa-plus"></i><a href="ajoutM.php" style='font-size:2.2rem'>Ajout d'une Matière</a></div><div class='task'><i class="fa-solid fa-house" ></i><a href="Directeur.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>