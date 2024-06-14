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
  <?php session_start();
   if(!(isset($_SESSION['nomP']))){
          header("Location:../index.php");}
    ?>
<section class="home">
    <fieldset><legend>Créer une Notification</legend>
    <form class='form-example' method='post' action='notif_act.php'>
<table >
<tr><td><label>Vers :</label></td>
              <td><select name="type" id="type" style='font-size:1.5rem'>
                <option value="Enseignant">Enseignant</option>
                <option value="Surveillant">Surveillant</option>
              </select></tr></td>
<tr>
<td> <div class="form-example"><label for="Sujet">Sujet :</label></td>
<td><input type = "text" name = "sujet" required/></div></td></tr>

<tr><td><div class="form-example"><label for="notif">Contenu de Notification :</label></td><td><textarea name="notification" id="notification" cols="35" rows="6" class="notification" placeholder="Enter your Message !"></textarea></div></td></tr>
</table>

<div class="form-example">
              <input type="submit" name="Submit" value="Enregistrer" style='font-size:1.5rem;margin:1rem'/>
              <input type="reset" name="annuler" value="Annuler" style='font-size:1.5rem'/>
            </div>
</fieldset>
<div class="bg"></div><div class='task'><i class="fa-solid fa-house" ></i><a href="Directeur.php">Acceuil</a></div><div class='task'><i class="fa-solid fa-list-check"></i><a href="listeNotifD.php">Liste des Notifs</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4></section>
</body>
</html>