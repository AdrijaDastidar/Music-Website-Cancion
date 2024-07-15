<?php
include("data_class.php");
session_start();
if (!isset($_GET['artist_id'])) {
    var_dump($_GET['artist_id']);
}

$artist = $_GET['artist_id']; 

try {
    $obj = new data();
    $obj->setconnection();

    $query = "SELECT * FROM song WHERE artist_id = :artist_id";
    $statement = $obj->connection->prepare($query);

    $statement->bindParam(':artist_id', $_SESSION['artist_id'], PDO::PARAM_INT);
    $statement->execute();

    $songs = $statement->fetchAll(PDO::FETCH_ASSOC);

    $obj->connection = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$obj->setconnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Songs</title>
    <link rel="stylesheet" href="style_c1.css">
</head>
<body>
    <header>
        <h2 class="logo">Cancion</h2>
        <nav class="navigation">
            <a href="index_p1.html">Home</a>
            <a href="#">About</a>
            <a href="#">Contact Us</a> 
            <a href="logout.php">Logout</a> <!-- Add logout link -->
       </nav>
    </header>

    <div id="container">
        <h1>My Songs</h1>
        <div id="song-list">
            <?php if (!empty($songs)): ?>
                <?php foreach ($songs as $song): ?>
                    <div class="song">
                        <h3><?php echo $song['s_name']; ?></h3>
                        <p>Mood: 
                            <?php 
                                // Fetch mood name based on mood ID
                                $query = "SELECT m_name FROM mood WHERE mood_id = :mood_id";
                                $statement = $obj->connection->prepare($query);
                                $statement->bindParam(':mood_id', $song['mood_id'], PDO::PARAM_INT);
                                $statement->execute();
                                $mood = $statement->fetch(PDO::FETCH_ASSOC);
                                echo $mood['m_name']; 
                            ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No songs found.</p>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>
