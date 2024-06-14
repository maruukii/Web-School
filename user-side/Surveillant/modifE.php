<head><link rel="stylesheet" href="../resources/style.css">    <script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="home">
<?php
require_once('../../controllers/EleveController.php');
$clientCtr=new EleveController();
$res=$clientCtr->getEleve($_GET['id']);
?><div class="xd">
<fieldset>
<legend>Modification D'un Élève </legend>
<form class='form-example' method='post' action='modifE_act.php'>
<table >
<tr>
<td> <div class="form-example"><label for="codeM">Code Élève :</label></td>
<td><input type = "text" name = "code" value = "<?php echo $res['codeEleve'] ?>"/></div></td></tr>
<tr>
<td><div class="form-example"><label for="text">Nom : </label></td>
<td><input type = "text" name = "nom" value = "<?php echo $res['nomEleve'] ?>"/></div></td></tr>
<tr><td><div class="form-example"><label for="text">Prenom : </label></td>
<td><input type = "text" name = "prenom" value = "<?php echo $res['prenomEleve'] ?>"/></div></td></tr>
<tr><td><div class="form-example"><label for="text">Age : </label></td>
<td><input type = "text" name = "age" value = "<?php echo $res['age'] ?>"/></div></td></tr>
<tr><td><div class="form-example">
              <label>Spécialité :</label></td><td>
<?php echo"
              <select name=\"spec\" id=\"spec\">
              <option value=\"Pas de Spécialité\""; if($res['specialité']=='Pas de Spécialité'){echo" selected";}echo ">Pas de Spécialité</option>
                <option value='Sciences Informatiques'"; if($res['specialité']=='Sciences Informatiques'){echo" selected";}echo ">Sciences Informatiques</option>
                <option value='Sciences Techniques'"; if($res['specialité']=='Sciences Techniques'){echo" selected";}echo ">Sciences Techniques</option>
                <option value='Sciences Expérimentales'"; if($res['specialité']=='Sciences Expérimentales'){echo" selected";}echo ">Sciences Expérimentales</option>
                <option value='Mathématiques'"; if($res['specialité']=='Mathématiques'){echo" selected";}echo ">Mathématiques</option>
                <option value='Lettres'"; if($res['specialité']=='Lettres'){echo" selected";}echo ">Lettres</option>
              </select>"; ?>
            </div></td></tr></table>
<div class="form-example">
              <input type="submit" name="Submit" value="Enregistrer" style='font-size:1.5rem;margin:1rem'/>
              <input type="reset" name="annuler" value="Annuler" style='font-size:1.5rem'/>
            </div>
</table></form></fieldset></div><div class='task'><i class="fa-solid fa-house" ></i><a href="Surveillant.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>