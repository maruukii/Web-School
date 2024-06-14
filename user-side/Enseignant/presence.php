<head><link rel="stylesheet" href="../resources/style.css"><script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script></head>
<body>
<section class="home">
<?php session_start();
if(!(isset($_SESSION['nomP']))){
          header("Location:../index.php");}
    ?>
<?php
date_default_timezone_set('Africa/Tunis');
$currentDateTime = date('Y-m-d\TH:i');
require_once('../../controllers/RegistreController.php');
$r=new RegistreController();
require_once('../../controllers/MatiereController.php');
$mat=new MatiereController();
$_SESSION['codeM']=$_POST['choix2'];
$x=$mat->getMatiere($_POST['choix2']);
require_once('../../controllers/EleveController.php');
require_once('../../controllers/ClasseController.php');
$classe=new ClasseController();
$_SESSION['classe']=$_POST['choix1'];
$t=$classe->getNombre($_POST['choix1']);
$clientCtr=new EleveController();
$res=$clientCtr->listeClasse($_POST['choix1']);
$i=0;
echo "<fieldset><form class=\"form-example\" method=\"post\" action=\"registre_act.php\">";
echo "<legend>Registre De Présence</legend><table border=1>";
echo "<p1 style='font-size:1.4rem;color:black'>Nombres Élèves: ".$t['nombreE']."<p2 style='font-size:1.4rem;color:red'> --- </p2>"."Matiere: ".$x['codeM']."/".$x['nomM']."<br>"." Enseignant: ".$_SESSION['nomP'].", ".$_SESSION['prenomP']."<br>"." Date : <input type=\"datetime-local\" value=\"".$currentDateTime."\" readonly></p1>";
echo"<tr>
    <th>Code Élève</th>
     <th>Nom</th>
      <th>Prenom</th>
  <th>Absent ?</th></tr>";
 foreach($res as $ligne){
    echo "<tr><td>{$ligne['codeEleve']}</td>
    <td>{$ligne['nomEleve']}</td>
    <td>{$ligne['prenomEleve']}</td>
    <td><input type=\"checkbox\" name=\"absent".$i."\" value=\"absent\" ></td></tr>";
    $i++;
  }?></table>
  <div class="form-example">
              <input type="submit" name="Submit" value="Enregistrer" style='font-size:1.5rem;margin:1rem'/>
              <input type="reset" name="annuler" value="Annuler" style='font-size:1.5rem'/>
            </div></form></fieldset>
<?php echo "</table></fieldset>";?><div class='task'><i class="fa-solid fa-house" ></i><a href="Enseignant.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>