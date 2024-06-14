<head><link rel="stylesheet" href="../resources/style.css">    <script src="https://kit.fontawesome.com/75d0026e6b.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="home">
<?php
require_once('../../controllers/ClasseController.php');
$clientCtr=new ClasseController();
$res=$clientCtr->getClasse($_GET['id']);
?><div class="xd">
<fieldset>
<legend>Modification D'une Classe </legend>
<form class='form-example' method='post' action='modifc_act.php'>
<table >
<tr>
<td> <div class="form-example"><label for="id">ID Classe:</label></td>
<td><input type = "text" name = "id" value = "<?php echo $res['idClasse'] ?>"/></div></td></tr>
<tr>
<td><div class="form-example"><label for="text">Nom Classe: </label></td>
<td><input type = "text" name = "nom" value = "<?php echo $res['nomClasse'] ?>"/></div></td></tr>
</table>
<div class="form-example">
              <input type="submit" name="Submit" value="Enregistrer" style='font-size:1.5rem;margin:1rem'/>
              <input type="reset" name="annuler" value="Annuler" style='font-size:1.5rem'/>
            </div>
</table></form></fieldset></div><div class='task'><i class="fa-solid fa-house" ></i><a href="Surveillant.php">Acceuil</a></div><h4><div><a href="../Logout/logout.php">se Déconnecter</a></div></h4><div class="bg"></div></section></body>