<?php
include("data_class.php");
session_start(); 
if(isset($_POST['delete_song'])) {
    $_SESSION['song_id'] = $_POST['song_id'];
}
$song_id = $_SESSION['song_id']; 
$artist_id = $_SESSION['artist_id'];

try {
    $obj = new data();
    $obj->setconnection();

    $callProcedure = "CALL delete_backup_song(:song_id, :artist_id)";

    $statement = $obj->connection->prepare($callProcedure);

    $song_id = $_SESSION['song_id']; 
    $artist_id = $_SESSION['artist_id']; 
    
    $statement->bindParam(':song_id', $song_id, PDO::PARAM_INT);
    $statement->bindParam(':artist_id', $artist_id, PDO::PARAM_INT);

    $statement->execute();

    echo "Stored procedure executed successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
