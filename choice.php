<?php
session_start();

if(isset($_GET['login_id'])) {
    $_SESSION['artist_id'] = $_GET['login_id'];
    $artist_id = $_SESSION['artist_id'];
    echo "Artist ID: " . $artist_id;
} 
else {
    echo "Artist ID is missing from the URL.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancion</title>
    <link rel="stylesheet" href="style_choice.css">
</head>

<body>
    <header>
        <h2 class="logo">Cancion</h2>
        <nav class="navigation">
            <a href="index.html">Home</a>
            <a href="#">About</a>
            <a href="#">Contact Us</a> 
        </nav>
    </header>
    <div class="container">
        <h1 id="title" class="text-center">What do you want...</h1>
        <form id="survey-form" action="c.php" method="post">
            <div class="form-group">
                <h2>Select an Option</h2><br>
                <label for="view-songs-radio" id="view-songs-label" class="option-label">
                    <input type="radio" id="view-songs-radio" name="option" class="input-radio" value="view">View Songs
                </label><br>
                <label for="add-song-radio" id="add-song-label" class="option-label">
                    <input type="radio" id="add-song-radio" name="option" class="input-radio" value="add">Add Song
                </label><br>
                <label for="delete-song-radio" id="delete-song-label" class="option-label">
                    <input type="radio" id="delete-song-radio" name="option" class="input-radio" value="delete">Delete Song
                </label><br>
                <label for="delete-account-radio" id="delete-account-label" class="option-label">
                    <input type="radio" id="delete-account-radio" name="option" class="input-radio" value="logout">Logout
                </label><br><br>
                <button type="submit" class="next-button">Next</button>
            </div>
        </form>
    </div>
    <script src="script_choice.js"></script>
</body>
</html>
