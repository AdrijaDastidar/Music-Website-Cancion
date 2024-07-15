<?php
session_start(); 

include("data_class.php");

if (isset($_SESSION['language']) && isset($_SESSION['singer']) && isset($_SESSION['mood'])) {
    $language = $_SESSION['language']; 
    $singer = $_SESSION['singer'];
    $mood = $_SESSION['mood']; 
} else {
    echo "Language or singer is not set in the session.";
    exit;
}

$songIds = array();
$songNames = array();

try {
    $obj = new data();
    $obj->setconnection();

    $q = "SELECT song_id, s_name FROM song WHERE lang_id = :language AND artist_id = :singer AND mood_id = :mood";
    $stmt = $obj->connection->prepare($q);

    $stmt->bindParam(':language', $language, PDO::PARAM_INT);
    $stmt->bindParam(':singer', $singer, PDO::PARAM_INT);
    $stmt->bindParam(':mood', $mood, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        $songIds[] = $row['song_id'];
        $songNames[] = $row['s_name'];
    }

    $obj->connection = null;

    $url = "page4.php?";
    foreach ($songIds as $index => $songId) {
        $url .= "songId[]=" . urlencode($songId) . "&";
        $url .= "songName[]=" . urlencode($songNames[$index]) . "&";
    }
    header("Location: $url");
    exit;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
