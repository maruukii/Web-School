<?php
session_start();
$nombre=0;
require_once('../../controllers/HoraireController.php');
$clientCtr=new HoraireController();
$res=$clientCtr->liste($_SESSION['cin']);
$expectedValues = array('s1','s2','s3','s4');
$j=0;
if (isset($_POST['myCheckbox0'])) {
  $lundi = $_POST['myCheckbox0'];
  $nombre=$nombre+count($_POST['myCheckbox0']);
} else {
  $lundi = array();
}
if (isset($_POST['myCheckbox1'])) {
  $mardi = $_POST['myCheckbox1'];
  $nombre=$nombre+count($_POST['myCheckbox1']);
} else {
  $mardi = array();
}
if (isset($_POST['myCheckbox2'])) {
  $mercredi = $_POST['myCheckbox2'];
  $nombre=$nombre+count($_POST['myCheckbox2']);
} else {
  $mercredi = array();
}
if (isset($_POST['myCheckbox3'])) {
  $jeudi = $_POST['myCheckbox3'];
  $nombre=$nombre+count($_POST['myCheckbox3']);
} else {
  $jeudi = array();
}
if (isset($_POST['myCheckbox4'])) {
  $vendredi = $_POST['myCheckbox4'];
  $nombre=$nombre+count($_POST['myCheckbox4']);
} else {
  $vendredi = array();
}
if (isset($_POST['myCheckbox5'])) {
  $samedi = $_POST['myCheckbox5'];
  $nombre=$nombre+count($_POST['myCheckbox5']);
} else {
  $samedi = array();
}
if($nombre!=$_SESSION['nbr']){
  header('Location:supH.php');
}
else{
  if(isset($_SESSION['mat'])){
if($res->rowCount()==0){
  
      $lundistr ="";
      $mardistr="";
      $mercredistr="";
      $jeudistr="";
      $vendredistr="";
      $samedistr="";

foreach ($expectedValues as $value) {
  if (!in_array($value, $lundi)) {
    $lundistr=$lundistr.'/:';
  }
  else{
    $lundistr=$lundistr.$value.'/'.$_SESSION['mat'].'/'.$_SESSION['cl'].':';
  }
}
//

foreach ($expectedValues as $value) {
  if (!in_array($value, $mardi)) {
    $mardistr=$mardistr.'/:';
  }
  else{
   $mardistr=$mardistr.$value.'/'.$_SESSION['mat'].'/'.$_SESSION['cl'].':';
  }
}
//

foreach ($expectedValues as $value) {
  if (!in_array($value, $mercredi)) {
    $mercredistr=$mercredistr.'/:';
  }
  else{
   $mercredistr=$mercredistr.$value.'/'.$_SESSION['mat'].'/'.$_SESSION['cl'].':';
  }
}
//

foreach ($expectedValues as $value) {
  if (!in_array($value, $jeudi)) {
   $jeudistr=$jeudistr.'/:';
  }
  else{
    $jeudistr=$jeudistr.$value.'/'.$_SESSION['mat'].'/'.$_SESSION['cl'].':';
  }
}
//

foreach ($expectedValues as $value) {
  if (!in_array($value, $vendredi)) {
   $vendredistr=$vendredistr.'/:';
  }
  else{
    $vendredistr=$vendredistr.$value.'/'.$_SESSION['mat'].'/'.$_SESSION['cl'].':';
  }
}
//

foreach ($expectedValues as $value) {
  if (!in_array($value, $samedi)) {
    $samedistr=$samedistr.'/:';
  }
  else{
    $samedistr=$samedistr.$value.'/'.$_SESSION['mat'].'/'.$_SESSION['cl'].':';
  }
}
    
    $array=array($lundistr,$mardistr,$mercredistr,$jeudistr,$vendredistr,$samedistr);
    $string = implode(',', $array);
    $clientCtr->insertion($string,$_SESSION['idh']);
    unset($_SESSION['mat']);
    header('Location:tabE.php');
  }
  else {
    foreach($res as $test){
    $array=explode(",",$test['jour']);
    $string0=explode(":",$array[0]);
    $string1=explode(":",$array[1]);
    $string2=explode(":",$array[2]);
    $string3=explode(":",$array[3]);
    $string4=explode(":",$array[4]);
    $string5=explode(":",$array[5]);
    $k=0;
    for($i=0;$i<24;$i=$i+4){
      ${'st'.$i}=explode("/",${'string'.$k}[0]);
      ${'st'.($i+1)}=explode("/",${'string'.$k}[1]);
      ${'st'.($i+2)}=explode("/",${'string'.$k}[2]);
      ${'st'.($i+3)}=explode("/",${'string'.$k}[3]);
      $k++;
      }
      $i=0;
      $arr=array($lundi,$mardi,$mercredi,$jeudi,$vendredi,$samedi);
      foreach($arr as $t){
      if (in_array($expectedValues[0], $t)) {
      ${'st'.$i}[0]=$expectedValues[0];
      ${'st'.$i}[1]=$_SESSION['mat'];
      ${'st'.$i}[2]=$_SESSION['cl'];
    }
      if (in_array($expectedValues[1], $t)) {
      ${'st'.($i+1)}[0]=$expectedValues[1];
      ${'st'.($i+1)}[1]=$_SESSION['mat'];
      ${'st'.($i+1)}[2]=$_SESSION['cl'];
    }
      if (in_array($expectedValues[2], $t)) {
      ${'st'.($i+2)}[0]=$expectedValues[2];
      ${'st'.($i+2)}[1]=$_SESSION['mat'];
      ${'st'.($i+2)}[2]=$_SESSION['cl'];
    }
      if (in_array($expectedValues[3], $t)) {
      ${'st'.($i+3)}[0]=$expectedValues[3];
      ${'st'.($i+3)}[1]=$_SESSION['mat'];
      ${'st'.($i+3)}[2]=$_SESSION['cl'];}
    $i=$i+4;
      }
      $l=0;
      for($i=0;$i<24;$i++){
        ${'str'.$i}=implode("/",${'st'.$l});
        $l++;
      }
      $j=0;
      $array0=array();
      $array1=array();
      $array2=array();
      $array3=array();
      $array4=array();
      $array5=array();
      for($i=0;$i<24;$i=$i+4){
        ${'array'.$j}[0]=${'str'.$i};
        ${'array'.$j}[1]=${'str'.($i+1)};
        ${'array'.$j}[2]=${'str'.($i+2)};
        ${'array'.$j}[3]=${'str'.($i+3)};
        $j++;
      }
    $s0=implode(":",$array0);
    $s1=implode(":",$array1);
    $s2=implode(":",$array2);
    $s3=implode(":",$array3);
    $s4=implode(":",$array4);
    $s5=implode(":",$array5);
    $array=array($s0,$s1,$s2,$s3,$s4,$s5);
    $string = implode(',', $array);
    $clientCtr->insertion($string,$_SESSION['idh']);
    unset($_SESSION['mat']);
    header('Location:tabE.php');
    }
    }
  }
    else{
      if($res->rowCount()==0){
  
        $lundistr ="";
        $mardistr="";
        $mercredistr="";
        $jeudistr="";
        $vendredistr="";
        $samedistr="";
  
  foreach ($expectedValues as $value) {
    if (!in_array($value, $lundi)) {
      $lundistr=$lundistr.':';
    }
    else{
      $lundistr=$lundistr.$value.':';
    }
  }
  //
  
  foreach ($expectedValues as $value) {
    if (!in_array($value, $mardi)) {
      $mardistr=$mardistr.':';
    }
    else{
     $mardistr=$mardistr.$value.':';
    }
  }
  //
  
  foreach ($expectedValues as $value) {
    if (!in_array($value, $mercredi)) {
      $mercredistr=$mercredistr.':';
    }
    else{
     $mercredistr=$mercredistr.$value.':';
    }
  }
  //
  
  foreach ($expectedValues as $value) {
    if (!in_array($value, $jeudi)) {
     $jeudistr=$jeudistr.':';
    }
    else{
      $jeudistr=$jeudistr.$value.':';
    }
  }
  //
  
  foreach ($expectedValues as $value) {
    if (!in_array($value, $vendredi)) {
     $vendredistr=$vendredistr.':';
    }
    else{
      $vendredistr=$vendredistr.$value.':';
    }
  }
  //
  
  foreach ($expectedValues as $value) {
    if (!in_array($value, $samedi)) {
      $samedistr=$samedistr.':';
    }
    else{
      $samedistr=$samedistr.$value.':';
    }
  }
      
      $array=array($lundistr,$mardistr,$mercredistr,$jeudistr,$vendredistr,$samedistr);
      $string = implode(',', $array);
      $clientCtr->insertion($string,$_SESSION['idh']);
      header('Location:tabS.php');
    }
    else {
      foreach($res as $test){
      $array=explode(",",$test['jour']);
      $string0=explode(":",$array[0]);
      $string1=explode(":",$array[1]);
      $string2=explode(":",$array[2]);
      $string3=explode(":",$array[3]);
      $string4=explode(":",$array[4]);
      $string5=explode(":",$array[5]);
      foreach ($expectedValues as $value) {
        if (in_array($value, $lundi)) {
        $string0[$j]=$value;}
        if (in_array($value, $mardi)) {
          $string1[$j]=$value;}
        if (in_array($value, $mercredi)) {
         $string2[$j]=$value;}
        if (in_array($value, $jeudi)) {
        $string3[$j]=$value;}
        if (in_array($value, $vendredi)) {
        $string4[$j]=$value;}
       if (in_array($value, $samedi)) {
      $string5[$j]=$value;}
      $j++;
        }
      $s0=implode(":",$string0);
      $s1=implode(":",$string1);
      $s2=implode(":",$string2);
      $s3=implode(":",$string3);
      $s4=implode(":",$string4);
      $s5=implode(":",$string5);
      $array=array($s0,$s1,$s2,$s3,$s4,$s5);
      $string = implode(',', $array);
      $clientCtr->insertion($string,$_SESSION['idh']);
      header('Location:tabS.php');}
      }}
    }
?>