<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../resources/style.css" />
    <script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php session_start();
  if(!(isset($_SESSION['nomP']))){
          header("Location:../index.php");}
    ?>
    <section class="home" id="home">
      <div class="xd">
        <fieldset>
          <legend>Attribution D'un Élève</legend>
          <form class="form-example" method="post" action="attribEns_act.php">
          <table>
          <tr> <?php require_once('../../controllers/PersonnelController.php');
    $clientCtr=new PersonnelController();
    $res=$clientCtr->liste_ENS();
    echo "<td><div class=\"form-example\"><label>Choix d'Enseignant :</label></td>";
    echo "<td><select name=\"choix1\" id=\"choix1\">";
    foreach($res as $ligne){  
        echo "<option value='{$ligne['CIN']}'>{$ligne['nomP']}, {$ligne['prenomP']} -- {$ligne['CIN']}</option>";
    }echo "</select></td></div>"?></tr><br>
              <br>
              <tr>
    <?php require_once('../../controllers/ClasseController.php');
    $clientCtr=new ClasseController();
    $res=$clientCtr->liste();
    echo "<td><div class=\"form-example\"><label>Choix de Classe :</label></td>";
    echo "<td><select name=\"choix2\" id=\"choix2\">";
    foreach($res as $ligne){  
        echo "<option value='{$ligne['idClasse']}'>{$ligne['idClasse']}-- {$ligne['nomClasse']}</option>";
    }echo "</select></td></div>"?></tr><br>
            <br>
            <tr> 
    <?php require_once('../../controllers/MatiereController.php');
    $clientCtr=new MatiereController();
    $res=$clientCtr->liste();
    echo "<td><div class=\"form-example\"><label>Choix de Matière :</label></td>";
    echo "<td><select name=\"choix3\" id=\"choix3\">";
    foreach($res as $ligne){  
        echo "<option value='{$ligne['codeM']}'>{$ligne['codeM']}-- {$ligne['nomM']}</option>";
    }echo "</select></td></div>"?></tr><br><br>
        </table>
            <br />
            <div class="form-example">
              <input type="submit" name="Submit" value="Enregistrer" style='font-size:1.5rem;margin:1rem'/>
              <input type="reset" name="annuler" value="Annuler" style='font-size:1.5rem'/>
            </div>
          </form>
        </fieldset>
      </div>
      <div class="bg"></div>
      <div class='task'><i class="fa-solid fa-list" ></i><a href="gestionEns.php">Liste des Attributions</a></div>
      <div class='task'><i class="fa-solid fa-house" ></i><a href="Surveillant.php">Acceuil</a></div>
    </section>
  </body>
</html>