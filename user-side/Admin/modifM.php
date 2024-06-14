<head><link rel="stylesheet" href="../resources/style.css">    <script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="home">
<?php
require_once('../../controllers/MatiereController.php');
$clientCtr=new MatiereController();
$res=$clientCtr->getMatiere($_GET['codeM']);
?><div class="xd">
<fieldset>
<legend>Modification d'une Matière </legend>
<form class='form-example' method='post' action='modifM_act.php'>
<table >
<tr>
<td> <div class="form-example"><label for="codeM">Code Matière :</label></td>
<td><input type = "text" name = "codeM" value = "<?php echo $res['codeM'] ?>"/></div></td></tr>
<tr>
<td><div class="form-example"><label for="text">Nom Matière : </label></td>
<td><input type = "text" name = "nomM" value = "<?php echo $res['nomM'] ?>"/></div></td></tr>
<tr><td><div class="form-example"><label for="text">Coefficient : </label></td>
<td><input type = "text" name = "coeff" value = "<?php echo $res['coeff'] ?>"/></div></td></tr></table>
<div class="form-example">
              <input type="submit" name="Submit" value="Enregistrer" style='font-size:1.5rem;margin:1rem'/>
              <input type="reset" name="annuler" value="Annuler" style='font-size:1.5rem'/>
            </div>
</table></form></fieldset></div><div class='task'><i class="fa-solid fa-house" ></i><a href="Directeur.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>