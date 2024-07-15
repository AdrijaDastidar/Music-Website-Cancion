<?php
include("data_class.php");
session_start();

if (isset($_GET['artist_id'])) {
    $_SESSION['artist_id'] = $_GET['artist_id'];
} else {
    echo "Artist ID is missing from the URL.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Dashboard</title>
    <link rel="stylesheet" href="style_p5.css">
</head>
<body>
    <header>
        <h2 class="logo">Cancion</h2>
        <nav class="navigation">
            <a href="index_p1.html">Home</a>
            <a href="#">About</a>
            <a href="#">Contact Us</a> 
       </nav>
    </header>

    <div id="container">
        <div id="upload-song-interface">
            <h1>Welome</h1>
            <h2>Upload New Song</h2><br>
            <form action="a_c2.php" method="POST" enctype="multipart/form-data">
                <label for="song-file">Select Song:</label>
                <input type="file" id="song-file" name="song-file" accept=".mp3">
                <br>
                <label for="song-title">Song Title:</label>
                <input type="text" id="song-title" name="song-title">
                <br>
                <label for="song-mood">Mood:</label>
                <select id="song-mood" name="mood">
                    <option value="1">Motivational</option>
                    <option value="2">Hip-hop</option>
                    <option value="3">Romantic</option>
                    <option value="4">Gloomy</option>
                    <option value="5">Party</option>
                    <option value="6">Melody</option>
                </select>
                <br>
                <label for="song-language">Language:</label>
                <select id="song-language" name="lang">
                    <option value="1">English</option>
                    <option value="2">Hindi</option>
                </select>
                <br><br>
                <input type="submit" value="Upload">
            </form>
        </div>
    </div>

</body>
</html>
