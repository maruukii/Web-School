<?php 
session_start();
if(isset($_SESSION['nomP'])){
session_destroy();
}
header("location:../index.php");
?>