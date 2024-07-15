<?php
include("data_class.php");
session_start();

if (!isset($_SESSION['artist_id'])) {
    header("Location: login.php");
    exit;
}

try {
    $obj = new data();
    $obj->setconnection();

    $query = "SELECT * FROM song WHERE artist_id = :artist_id";
    $statement = $obj->connection->prepare($query);
    $statement->bindParam(':artist_id', $_SESSION['artist_id'], PDO::PARAM_INT);
    $statement->execute();
    $songs = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    $statement = null;

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
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
            <a href="logout.php">Logout</a> 
    </header>

    <div id="container">
        <div id="song-list">
        <h1>My Songs</h1>
            <?php if (!empty($songs)): ?>
                <?php foreach ($songs as $song): ?>
                    <div class="song">
                        <h3><?php echo $song['s_name']; ?></h3>
                        <form method="POST" action="a_c3.php">
                            <input type="hidden" name="song_id" value="<?php echo $song['song_id']; ?>">
                            <button type="submit" name="delete_song">Delete</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No songs found.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
