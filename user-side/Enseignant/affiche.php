<head><link rel="stylesheet" href="../resources/style.css"><script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script></head>
<body>
<section class="home">
<?php session_start();
if(!(isset($_SESSION['nomP']))){
          header("Location:../index.php");}
    ?>
<?php
require_once('../../controllers/EnseignementController.php');
require_once('../../controllers/EleveController.php');
require_once('../../controllers/ClasseController.php');
require_once('../../controllers/MatiereController.php');
require_once('../../controllers/RegistreController.php');
$mat=new MatiereController();
$el=new EleveController();
$cl=new ClasseController();
$ens=new EnseignementController();
$clientCtr=new RegistreController();
$t=$ens->getIDE($_SESSION['ncin'],$_SESSION['mat'],$_SESSION['classe']);
$res=$clientCtr->liste($_POST['choix1'],$t['ID']);
$x=$mat->getMatiere($_SESSION['mat']);
$y=$cl->getClasse($_SESSION['classe']);
$nom=$el->getEleve($_POST['choix1']);
echo "<fieldset>
<legend>Absences D'un Élève</legend><table border=1>";
echo "<p1 style='font-size:1.4rem;color:black'>Classe: ".$y['nomClasse']."<p2 style='font-size:1.4rem;color:red'> --- </p2>"."Matiere: ".$x['nomM']."<br>"." Enseignant: ".$_SESSION['nomP'].", ".$_SESSION['prenomP']."<br>Élève: ".$nom['nomEleve'].", ".$nom['prenomEleve']."</p1>
    <tr>
    <th>Code Eleve</th>
     <th>Nom</th>
      <th>Prenom </th>
     <th>Date Absence</th>";
     $absence=0;
 foreach($res as $ligne){
    $nom=$el->getEleve($ligne['codeEleve']);
    $absence=$ligne['nbrA'];
    echo "<tr><td>{$nom['codeEleve']}</td>
    <td>{$nom['nomEleve']}</td>
    <td>{$nom['prenomEleve']}</td>
    <td>{$ligne['dateAbsence']}</td>";
  }
echo "<tr><td>Nombres Absences = $absence</td>";
echo "</table></fieldset>";?><div class='task'><i class="fa-solid fa-house" ></i><a href="Enseignant.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>