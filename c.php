<?php
session_start(); 
include("data_class.php");

if(isset($_SESSION['artist_id'])) {
    $artist_id = $_SESSION['artist_id'];
    echo "Artist ID: " . $artist_id;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['option'])) {
            switch ($_POST['option']) {
                case 'view':
                    header("Location: c1.php?artist_id=" . $_SESSION['artist_id']);
                    exit;
                case 'add':
                    header("Location: c2.php?artist_id=" . $_SESSION['artist_id']);
                    exit;
                case 'delete':
                    header("Location: c3.php?artist_id=" . $_SESSION['artist_id']);
                    exit;
                case 'logout':
                    header("Location: c4.php?artist_id=" . $_SESSION['artist_id']);
                    exit;
                case 'rating':
                    header("Location: c5.php?artist_id=" . $_SESSION['artist_id']);
                    exit;
                default:
                    echo "Please select an option.";
                    exit;
            }
        } else {
            echo "Please select an option.";
            exit;
        }
    } else {
        echo "Invalid request method.";
        exit;
    }
} 
else {
    echo "Artist ID is missing from the session.";
}
?>
