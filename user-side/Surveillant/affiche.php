<head><link rel="stylesheet" href="../resources/style.css"><script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script></head>
<body>
<section class="home">
<?php session_start();
if(!(isset($_SESSION['nomP']))){
          header("Location:../index.php");}
    ?>
<?php
require_once('../../controllers/EleveController.php');
require_once('../../controllers/PersonnelController.php');
require_once('../../controllers/ClasseController.php');
require_once('../../controllers/NoteController.php');
require_once('../../controllers/MatiereController.php');
require_once('../../controllers/EnseignementController.php');
$e=new EleveController();
$nom=$e->getEleve($_POST['choix1']);
$clientCtr=new ClasseController();
$cl=$clientCtr->getClasse($nom['idClasse']);
$n=new NoteController();
$note=$n->listeN($_POST['choix1']);
$ens=new EnseignementController();
$m=new MatiereController();
$p=new PersonnelController();
$coeff=0;
$somme=0;
echo "<fieldset>
<legend>Relevé Des Note De ".$nom['nomEleve'].", ".$nom['prenomEleve']."</legend><table border=1>";
echo "<p1 style='font-size:1.4rem;color:orange'>Classe:".$cl['nomClasse']."</p1>";
echo"<tr>
    <th>Nom Matiere</th>
     <th>Coeff Matiere</th>
     <th>Enseignant</th>
      <th>DC</th>
      <th>DS</th>
  <th>TP</th>
  <th>Moyenne Matiere</th>
  <th>Score Matiere</th>
  </tr>";
 foreach($note as $ligne){
    $en=$ens->getEnseignement($ligne['ID']);
    $mat=$m->getMatiere($en['codeM']);
    $pers=$p->getPers($en['CIN']);
    $moy=($ligne['noteDC']+$ligne['noteTP']+($ligne['noteDS']*2))/4;
    $score=$moy*$mat['coeff'];
    echo "<tr>
    <td>{$mat['nomM']}</td>
    <td>{$mat['coeff']}</td>
    <td>{$pers['nomP']}, {$pers['prenomP']}</td>
    <td>{$ligne['noteDC']}</td>
    <td>{$ligne['noteDS']}</td>
    <td>{$ligne['noteTP']}</td>
    <td>$moy</td>
    <td>$score</td>
    </tr>";
    $somme+=$score;
    $coeff+=$mat['coeff'];
  }
  echo "<tr><td style='font-weight:bold'>Score Générale: ".number_format($somme,3)."</td></tr>";
  echo "<tr><td style='font-weight:bold'>Moyenne Générale: ";if($coeff!=0){echo number_format($somme/$coeff,3);}echo "</td></tr>";
  
echo "</table></fieldset>";?><div class='task'><i class="fa-solid fa-house" ></i><a href="Surveillant.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>