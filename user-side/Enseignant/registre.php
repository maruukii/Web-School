<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/style.css">
    <script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="home">
<h2><?php session_start();
if(!(isset($_SESSION['nomP']))){
    header("Location:../index.php");}
?></h2>
<fieldset>
<legend>Registre De Présence</legend>
<form class='form-example' method='post' action='presence.php'>
<table style="border-spacing:1px">
    <tr>
    <?php if(isset($_GET['x'])){ echo "<span style='color:red;font-size:1.5rem'>Absences Enregistrées ! </span>";}
     require_once('../../controllers/EnseignementController.php');
    require_once('../../controllers/ClasseController.php');
    require_once('../../controllers/MatiereController.php');
    $classe=new ClasseController();
    $mat=new MatiereController();
    $clientCtr=new EnseignementController();
    $res=$clientCtr->listeENSD($_SESSION['ncin']);
    echo "<td><div class=\"form-example\"><label>Choix de Classe :</label></td>";
    echo "<td><select name=\"choix1\" id=\"choix1\">";
    foreach($res as $ligne){  
        $nom=$classe->getClasse($ligne['idClasse']);
        echo "<option value='{$nom['idClasse']}'>{$nom['idClasse']} -- ".$nom['nomClasse']."</option>";
    }echo "</select></td></div>"?></tr><br>
    <tr><?php 
    echo "<td><div class=\"form-example\"><label>Choix de Matiere :</label></td>";
    echo "<td><select name=\"choix2\" id=\"choix2\">";
    $res=$clientCtr->listeENSM($_SESSION['ncin']);
    foreach($res as $ligne){  
        $x=$mat->getMatiere($ligne['codeM']);
        echo "<option value='{$x['codeM']}'>{$x['codeM']} -- ".$x['nomM']."</option>";
    }echo "</select></td></div>"?></tr><br>
    </table> <div class="form-example">
              <input type="submit" name="Submit" value="Passer Au Registre De Présence" style='font-size:1.5rem;margin:1rem'/>
              <input type="reset" name="annuler" value="Annuler" style='font-size:1.5rem'/>
            </div>
</form></fieldset><div class='task'><i class="fa-solid fa-list"></i><a href="absence.php" style='font-size:2.2rem'>Afficher Les Absences D'un Élève</a></div>
<div class='task'><i class="fa-solid fa-house" ></i><a href="Directeur.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4>

<div class="bg"></div></section>
</body>
</html>