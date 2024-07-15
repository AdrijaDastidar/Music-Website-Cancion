<?php
session_start(); 

include("data_class.php");

$singer = $_POST['FavoriteSinger'];
$_SESSION['singer'] = $singer; 
header("Location:page3.php");
?>
