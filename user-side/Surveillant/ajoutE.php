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
          <legend>Ajout D'un Élève</legend>
          <form class="form-example" method="post" action="AjoutE_act.php">
          <table>
          <tr><td><div class="form-example">
                
              <label for="codeM">Code Élève :</label></td>
              <td><input type="text" name="codeM" id="codeM" required />
            </div></td></tr>
            <br>
            <tr><td><div class="form-example">
              <label for="text">Nom Élève: </label></td>
             <td><input type="text" name="nomM" id="nomM" />
            </div></td></tr>
            <br>
            <tr><td><div class="form-example">
              <label for="text">Prenom Élève : </label></td>
              <td><input type="text" name="prenom" id="prenom" />
            </div></td></tr>
            <br>
            <tr><td><div class="form-example">
              <label for="text">Age : </label></td>
              <td><input type="text" name="age" id="age" />
            </div></td></tr>
            <br>
            <tr><td><div class="form-example">
              <label>Spécialité :</label></td><td>
              <select name="spec" id="spec">
              <option value="Pas de Spécialité">Pas de Spécialité</option>
                <option value="Sciences Informatiques">Sciences Informatiques</option>
                <option value="Sciences Techniques">Sciences Techniques</option>
                <option value="Sciences Expérimentales">Sciences Expérimentales</option>
                <option value="Mathématiques">Mathématiques</option>
                <option value="Lettres">Lettres</option>
              </select>
            </div></td></tr>
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
      <div class='task'><i class="fa-solid fa-house" ></i><a href="Surveillant.php">Acceuil</a></div>
    </section>
  </body>
</html>