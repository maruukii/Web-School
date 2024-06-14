<head><link rel="stylesheet" href="../resources/style.css">    <script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="home">
<?php
require_once('../../controllers/PersonnelController.php');
$clientCtr=new PersonnelController();
$res=$clientCtr->getPers($_GET['id']);
?><div class="xd">
<fieldset>
<legend>Modification d'un Personnel </legend>
<form class='form-example' method='post' action='modif_act.php'>
<table >
<tr>
<td> <div class="form-example"><label for="CIN">Num&eacute;ro Cin :</label></td>
<td><input type = "text" name = "ncin" value = "<?php echo $res['CIN'] ?>"/></div></td></tr>
<tr>
<td><div class="form-example"><label for="text">Nom : </label></td>
<td><input type = "text" name = "nom" value = "<?php echo $res['nomP'] ?>"/></div></td></tr>
<tr><td><div class="form-example"><label for="text">Prenom : </label></td>
<td><input type = "text" name = "prenom" value = "<?php echo $res['prenomP'] ?>"/></div></td></tr>
<tr>
<td><div class="form-example">
              <label for="text">Num telephone : </label></td>
<td><input type = "text" name = "tel" value = "<?php echo $res['num_telephone'] ?>"/></div></td></tr>
<tr>
<td><div class="form-example">
              <label for="text">Password : </label></td>
<td><input type = "text" name = "pass" value = "<?php echo $res['password'] ?>"/></div></td></tr></table>
<div class="form-example">
              <input type="submit" name="Submit" value="Enregistrer" style='font-size:1.5rem;margin:1rem'/>
              <input type="reset" name="annuler" value="Annuler" style='font-size:1.5rem'/>
            </div>
</table></form></fieldset></div><div class='task'><i class="fa-solid fa-house" ></i><a href="Directeur.php">Acceuil</a></div><h4 style='bottom:13%'><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>