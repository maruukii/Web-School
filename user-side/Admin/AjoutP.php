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
          <legend>Ajout d'un Personnel</legend>
          <form class="form-example" method="post" action="AjoutP_act.php">
          <table>
          <tr><td><div class="form-example">
                
              <label for="CIN">Num&eacute;ro Cin :</label></td>
              <td><input type="text" name="ncin" id="ncin" required />
            </div></td></tr>
            <br>
            <tr><td><div class="form-example">
              <label for="text">Nom : </label></td>
             <td><input type="text" name="nomP" id="nomP" />
            </div></td></tr>
            <br>
            <tr><td><div class="form-example">
              <label for="text">Prenom : </label></td>
              <td><input type="text" name="prenomP" id="prenomP" />
            </div></td></tr>
            <br />
            <tr><td><div class="form-example">
              <label for="text">Password : </label></td>
             <td> <input type="text" name="password" id="password" />
            </div></td></tr>
            <br />
            <tr><td> <div class="form-example">
              <label for="text">Num&eacute;ro Telephone : </label></td>
              <td><input type="text" name="numTel" id="numTel" />
            </div></td></tr>
            <br />
              <tr><td><label>Grade :</label></td>
              <td><select name="grade" id="grade">
                <option value="Enseignant">Enseignant</option>
                <option value="Surveillant">Surveillant</option>
              </select></td></tr></table>
            <br />
            <div class="form-example">
              <input type="submit" name="Submit" value="Enregistrer" style='font-size:1.5rem;margin:1rem'/>
              <input type="reset" name="annuler" value="Annuler" style='font-size:1.5rem'/>
            </div>
          </form>
        </fieldset>
      </div>
      <div class="bg"></div>
      <div class='task'><i class="fa-solid fa-house" ></i><a href="Directeur.php">Acceuil</a></div>
    </section>
  </body>
</html>