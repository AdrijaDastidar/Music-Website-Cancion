<?php

session_start(); 

include("data_class.php");
$language = $_POST['language'];

$_SESSION['language'] = $language; 

var_dump($_POST);

if ($language == 1){
    header("Location: page2e.php");
}
if($language == 2){
    header("Location: page2h.php");
}

?>
