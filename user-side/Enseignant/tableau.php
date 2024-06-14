<head><link rel="stylesheet" href="../resources/style.css"><script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script></head>
<body>
<section class="home">
<?php session_start();
if(!(isset($_SESSION['nomP']))){
          header("Location:../index.php");}
    ?>
<?php
$k=-3;
require_once('../../controllers/EnseignementController.php');
$ens=new EnseignementController();
require_once('../../controllers/MatiereController.php');
$mat=new MatiereController();
$x=$mat->getMatiere($_POST['choix2']);
require_once('../../controllers/EleveController.php');
$clientCtr=new EleveController();
$res=$clientCtr->listeClasse($_POST['choix1']);
$_SESSION['classe']=$_POST['choix1'];
$_SESSION['matiere']=$_POST['choix2'];
require_once('../../controllers/NoteController.php');
$n=new NoteController();
$azerty=$ens->getIDE($_SESSION['ncin'],$_SESSION['matiere'],$_SESSION['classe']);
$test=$n->getTrue($azerty['ID']);
if($test!=null){
    $_SESSION['idE']=$test['ID'];
    header("Location:tableauMODIF.php");
}
echo "<fieldset>
<legend>Déposer Les Notes Des Élèves</legend>
<h6 style='font-size:1.8rem;color:red'>Enseignant: ".$_SESSION['nomP']." , ". $_SESSION['prenomP']."</h6>";
echo "<p1 style='font-size:1.4rem;color:orange'>Matiere:".$_POST['choix2']." -- ".$x['nomM']."</p1>";
echo "<form class=\"form-example\" method=\"post\" action=\"not.php\">";
echo"<table border=1><tr>
    <th>Code Élève</th>
     <th>Nom</th>
      <th>Prenom</th>
     <th>Specialité </th>
     <th>Note DC</th>
      <th>Note DS</th>
  <th>Note TP</th></tr>";
 foreach($res as $ligne){
    $k=$k+3;
    $val1="moyenne".strval($k);
    $val2="moyenne".strval($k+1);
    $val3="moyenne".strval($k+2);
    echo "<tr><td>{$ligne['codeEleve']}</td>
    <td>{$ligne['nomEleve']}</td>
    <td>{$ligne['prenomEleve']}</td>
    <td>{$ligne['specialité']}</td>
    <td><input type=\"number\" step=\"any\" name=".$val1." id=\"moyenne\"></td>
    <td><input type=\"number\" step=\"any\" name=".$val2." id=\"moyenne\"></td>
    <td><input type=\"number\" step=\"any\" name=".$val3." id=\"moyenne\"></td></tr>";
  }
echo "</table><div class=\"form-example\">
<input type=\"submit\" name=\"Submit\" value=\"Enregistrer\" style='font-size:1.5rem;margin:1rem'/>
<input type=\"reset\" name=\"annuler\" value=\"Annuler\" style='font-size:1.5rem'/>
</div>
</form></fieldset>";?><div class='task'><i class="fa-solid fa-house" ></i><a href="Enseignant.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>