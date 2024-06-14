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
<legend>Relevé D'un Élève</legend>
<form class='form-example' method='post' action='affiche.php'>
<table style="border-spacing:1px">
    <tr>
    <?php require_once('../../controllers/EleveController.php');
    $clientCtr=new EleveController();
    $res=$clientCtr->liste();
    echo "<td><div class=\"form-example\"><label>Choix d'Élève :</label></td>";
    echo "<td><select name=\"choix1\" id=\"choix1\">";
    foreach($res as $ligne){  
        echo "<option value='{$ligne['codeEleve']}'>{$ligne['codeEleve']} -- ".$ligne['nomEleve'].", ".$ligne['prenomEleve']."</option>";
    }echo "</select></td></div>"?></tr><br>
    </table> <div class="form-example">
              <input type="submit" name="Submit" value="Afficher Relevé Des Notes" style='font-size:1.5rem;margin:1rem'/>
              <input type="reset" name="annuler" value="Annuler" style='font-size:1.5rem'/>
            </div>
</form></fieldset>
<div class='task'><i class="fa-solid fa-house" ></i><a href="Surveillant.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4>

<div class="bg"></div></section>
</body>
</html>