<?php

include("data_class.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $obj = new data();
        $obj->setconnection();
        $obj->user_login($email, $password);
    } else {
        header("Location: index.php?msg=Invalid Credentials");
        exit;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['user_name']) && isset($_GET['new_email']) && isset($_GET['new_password'])) {
        $user_name = $_GET['user_name'];
        $new_email = $_GET['new_email'];
        $new_password = $_GET['new_password'];

        $obj = new data();
        $obj->setconnection();
        add_new_user($obj, $user_name, $new_email, $new_password);
    } else {
        header("Location: index.php?msg=unsuccesful");
        exit;
    }
} else {
    header("Location: index.php?msg=Invalid Request");
    exit;
}

function add_new_user($obj, $name, $email, $password){
    $q = "INSERT INTO user (user_name, email, pass) VALUES ('$name', '$email', '$password')";

    $result = $obj->connection->query($q);

    if($result){
        header("Location: index.php?msg=sucessful");
        exit;
    } else {
        header("Location: index.php?msg=Invalid");
        exit;
    }
}

?>
