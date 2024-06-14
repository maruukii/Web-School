<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/style.css">
</head>
<body>
<section class="home" id="home">
 <div class="xd">
<?php
session_start();
require_once('../../controllers/HoraireController.php');
$personCtr=new HoraireController();
$res=$personCtr->getId($_SESSION['cin']);

$_SESSION['idh']=$res['idH'];
echo "<fieldset>".$_SESSION['string']."
<form class=\"form-example\" method=\"post\" action=\"horaireP.php\">";
?>
<?php
$array=array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi');
echo "<table>";
$i=0;
foreach($array as $test){
echo "
 <tr><td><div class=\"form-example\">
  <label>$test</label></td>
  <td>
    <input type=\"checkbox\" name=\"myCheckbox".$i."[]\" value=\"s1\">
    S1 [8:00 10:00]</td>
    <td>
    <input type=\"checkbox\" name=\"myCheckbox".$i."[]\" value=\"s2\">
    S2 [10:00 12:00]</td>
    <td>
    <input type=\"checkbox\" name=\"myCheckbox".$i."[]\" value=\"s3\">
    S3 [14:00 16:00]</td>
    <td>
    <input type=\"checkbox\" name=\"myCheckbox".$i."[]\" value=\"s4\">
    S4 [16:00 18:00]</td></div></tr>";
  $i++;
}

  echo "<tr><td style='font-size:1.5rem;text-decoration:underline;color:red;'>Nombres Scéances :</td><td>".$_SESSION['nbr']."</td></tr></table>
            <br />
            <div class=\"form-example\">
              <input type=\"submit\" name=\"Submit\" value=\"Enregistrer\" style='font-size:1.5rem;margin:1rem'/>
              <input type=\"reset\" name=\"annuler\" value=\"Annuler\" style='font-size:1.5rem'/>
            </div>
          </form>
        </fieldset>
      </div>
      <div class=\"bg\"></div>
    </section>
?>
</body>
</html>";
?>
?>