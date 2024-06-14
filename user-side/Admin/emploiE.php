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
    $_SESSION['ch']="e";
?></h2>
<fieldset>
<legend>Gestion des Horaires de Travail</legend>
<form class='form-example' method='post' action='emploi_act.php'>
<table style="border-spacing:1px">
    <tr>
    <?php require_once('../../controllers/PersonnelController.php');
    $clientCtr=new PersonnelController();
    $res=$clientCtr->liste_ENS();
    echo "<td><div class=\"form-example\"><label>Choix de Personnel :</label></td>";
    echo "<td><select name=\"choix1\" id=\"choix1\">";
    foreach($res as $ligne){  
        echo "<option value='{$ligne['CIN']}'>{$ligne['nomP']}, {$ligne['prenomP']}</option>";
    }echo "</select></td></div>"?></tr><br>
     <tr>
    <?php require_once('../../controllers/MatiereController.php');
    $clientCtr=new MatiereController();
    $res=$clientCtr->liste();
    echo "<td><div class=\"form-example\"><label>Choix de Matière :</label></td>";
    echo "<td><select name=\"choix2\" id=\"choix2\">";
    foreach($res as $ligne){  
        echo "<option value='{$ligne['codeM']}'>{$ligne['codeM']}--{$ligne['nomM']}</option>";
    }echo "</select></td></div>"?></tr><br>
     <tr>
    <?php require_once('../../controllers/ClasseController.php');
    $clientCtr=new ClasseController();
    $res=$clientCtr->liste();
    echo "<td><div class=\"form-example\"><label>Choix de Classe :</label></td>";
    echo "<td><select name=\"choix3\" id=\"choix3\">";
    foreach($res as $ligne){  
        echo "<option value='{$ligne['idClasse']}'>{$ligne['idClasse']}--{$ligne['nomClasse']}</option>";
    }echo "</select></td></div>"?></tr><br>
              <tr><td>
    <div class="form-example">
                <label for="nbr">Nombres Scéances :</label></td>
                <td><input type="text" name="nbr" id="nbr" required />
              </div></td></tr>
              </table>  
              <div class="verif"><?php if(isset($_GET['x'])){ echo "<span style='color:red;font-size:1.5rem'>SVP!! vérifier Le Nombre Des Scéances ! </span>";}?></div>
        
<div class="form-example">
              <input type="submit" name="Submit" value="Passer au Tableau D'Horaire" style='font-size:1.5rem;margin:1rem'/>
              <input type="reset" name="annuler" value="Annuler" style='font-size:1.5rem'/>
            </div>
</form></fieldset>
<div class='task'><i class="fa-solid fa-plus"></i><a href="voir.php" style='font-size:2.2rem'>Consulter Un Emploi de Temps d'un Personnel</a></div><div class='task'><i class="fa-solid fa-trash"></i><a href="supEMP.php" style='font-size:2.2rem'>Supprimer Un Emploi de Temps d'un Personnel</a></div><div class='task'><i class="fa-solid fa-house" ></i><a href="Directeur.php">Acceuil</a></div>

<div class="bg"></div></section>
</body>
</html>