<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="resources/style.css" />
  </head>
  <body>
    <section class="home" id="home">
      <h1>Bienvenue !!</h1>
      <div class="xd">
        <fieldset>
          <legend>Se Connecter</legend>
          <form class="form-example" method="post" action="Login/login.php">
            <div class="form-example">
              <label for="CIN">Num&eacute;ro Cin :</label>
              <input type="text" name="ncin" id="ncin" required />
            </div>
            <br />
            <div class="form-example">
              <label for="text">Password :</label>
              <input type="text" name="password" id="password" required />
            </div>
            <br />
            <div class="verif"><?php if(isset($_GET['b'])){ echo "<span style='color:red;font-size:1.5rem'>SVP!! vérifier vos Cordonnées ! </span>";}?></div>
            <div class="form-example">
              <label>Connecter en tant que :</label> 
              <select name="choix" id="choix">
                <option value="Directeur">Directeur</option>
                <option value="Enseignant">Enseignant</option>
                <option value="Surveillant">Surveillant</option>
              </select>
            </div>
            <br />
            <div class="form-example">
              <input type="submit" name="Submit" value="Se Connecter" style='margin-right:1rem'/>
              <input type="reset" name="annuler" value="Annuler" />
            </div>
          </form>
        </fieldset>
      </div>
      <div class="bg"></div>
    </section>
  </body>
</html>
