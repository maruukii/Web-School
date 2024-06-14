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
          <legend>Ajout D'une Classe</legend>
          <form class="form-example" method="post" action="AjoutC_act.php">
          <table>
          <tr><td><div class="form-example">
                
                <label for="codeM">ID Classe :</label></td>
                <td><input type="text" name="id" id="id" required />
              </div></td></tr>
              <br>
          <tr><td><div class="form-example">
                
              <label for="codeM">Nom Classe :</label></td>
              <td><input type="text" name="nom" id="nom" required />
            </div></td></tr>
            <br>
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