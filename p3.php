<?php
session_start(); 

include("data_class.php");

$mood = $_POST['mood'];
$_SESSION['mood'] = $mood; 
header("Location:p4.php");
?>