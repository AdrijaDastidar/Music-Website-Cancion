<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancion - Your favorite music is here! </title>
    <link rel="stylesheet" href="style_p4.css">
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
        <div class="Songlist">
            <h1 class="title">Songs We Recommend </h1>
            <div class="songItemContainer">
                <?php
                if(isset($_GET['songId']) && isset($_GET['songName'])) {
                    $songIds = $_GET['songId'];
                    $songNames = $_GET['songName'];
                    
                    foreach($songIds as $index => $songId) {
                        $imagePath = "Covers/$songId.jpg";
                        echo '<div class="songItem">
                                <img src="' . $imagePath . '" alt="' . $index . '">
                                <span class="songName">' . $songNames[$index] . '</span>
                                <span class="songlistplay"><span class="timestamp"> <i id="' . $index . '" class="far songItemPlay fa-play-circle"></i>  </span></span>
                              </div>';
                    }
                } else {
                    echo "No songs found.";
                }
                ?>
            </div>
        </div>
        <div class="SongBanner"></div>
    </div>
    <div class="bottom">
        <input type="range" name="range" id="myProgressBar" min="0" value="0" max="100">
        <div class="icons">
            <i class="fas fa-3x fa-step-backward" id="previous"></i>
            <i class="far fa-3x fa-play-circle" id="masterPlay"></i>
            <i class="fas fa-3x fa-step-forward" id="next"></i>
        </div>
        <div class="songInfo">
            <img src="image/playing.gif" alt="" id="gif"> <span id="masterSongName"></span>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"></script>
    <script src="script_p4.js"></script>
</body>
</html>
