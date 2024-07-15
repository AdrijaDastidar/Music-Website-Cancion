<?php
include("data_class.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $obj = new data();
        $obj->setconnection();
        $obj->artist_login($email, $password);
    } else {
        header("Location: artist_login.php?msg=Invalid Credentials");
        exit;
    }
} 
elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['artist_name']) && isset($_GET['new_email']) && isset($_GET['new_password'])) {
        $artist_name = $_GET['artist_name'];
        $new_email = $_GET['new_email'];
        $new_password = $_GET['new_password'];

        $obj = new data();
        $obj->setconnection();

        $result = add_new_artist($obj, $artist_name, $new_email, $new_password);
        if ($result) {
            header("Location: artist_login.php?msg=successful");
            exit;
        } else {
            header("Location: artist_login.php?msg=Invalid");
            exit;
        }
    } else {
        header("Location: artist_login.php?msg=unsuccessful");
        exit;
    }
} 
else {
    header("Location: artist_login.php?msg=Invalid Request");
    exit;
}

function add_new_artist($obj, $a_name, $email, $a_password){
    $query = "INSERT INTO artist (a_name, email, pass) VALUES (:a_name, :email, :a_password)";
    $statement = $obj->connection->prepare($query);
    $statement->bindValue(':a_name', $a_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':a_password', $a_password);
    $result = $statement->execute();
    
    return $result;
}

?>


