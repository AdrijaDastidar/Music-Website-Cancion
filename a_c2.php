<?php
include("data_class.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['song-title']) && isset($_POST['lang']) && isset($_POST['mood'])) {
        if (isset($_SESSION['artist_id'])) {
            $artist_id = $_SESSION['artist_id'];
            $song_title = $_POST['song-title'];
            $lang_id = $_POST['lang'];
            $mood_id = $_POST['mood'];

            $obj = new data();
            $obj->setconnection();
            add_new_song($obj, $artist_id, $song_title, $lang_id, $mood_id);
        } else {
            echo "Artist ID is not set in the session.";
            exit;
        }
    } else {
        echo "One or more POST parameters are missing.";
        exit;
    }
} else {
    echo "Invalid request method.";
    exit;
}

function add_new_song($obj, $artist_id, $song_title, $lang_id, $mood_id){
    $q = "INSERT INTO song (s_name, artist_id, lang_id, mood_id) VALUES ('$song_title', '$artist_id', '$lang_id', '$mood_id')";
    $result = $obj->connection->query($q);

    if($result){
        echo "Added new song";
    } else {
        echo "Failed to add song to the database.";
        exit;
    }
}
?>
