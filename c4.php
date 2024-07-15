<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: artist_login.php");
    exit;
?>
