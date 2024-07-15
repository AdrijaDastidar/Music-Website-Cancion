<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancion</title>
    <link rel="stylesheet" href="style_p2e.css">
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
        <h1 id="title" class="text-center">Continue...</h1>
        <form id="survey-form" action="p2.php" method="post">
            <div class="form-group">
                <h2>Select Your Favorite Singer</h2><br>
                <label for="taylor-radio" id="taylor-label" class="singer-label">
                    <input type="radio" id="taylor-radio" name="FavoriteSinger" class="input-radio" value="1" checked>Taylor Swift
                </label><br>
                <label for="ed-radio" id="ed-label" class="singer-label">
                    <input type="radio" id="ed-radio" name="FavoriteSinger" class="input-radio" value="2" >Ed Sheeran
                </label><br>
                <label for="justin-radio" id="justin-label" class="singer-label">
                    <input type="radio" id="justin-radio" name="FavoriteSinger" class="input-radio" value="3" >Justin Bieber
                </label>
                <label for="ariana-radio" id="ariana-label" class="singer-label">
                    <input type="radio" id="ariana-radio" name="FavoriteSinger" class="input-radio" value="4" >Ariana Grande
                </label><br>
                <label for="beyonce-radio" id="beyonce-label" class="singer-label">
                    <input type="radio" id="beyonce-radio" name="FavoriteSinger" class="input-radio" value="5" >Beyoncé
                </label><br>
                <label for="shawn-radio" id="shawn-label" class="singer-label">
                    <input type="radio" id="shawn-radio" name="FavoriteSinger" class="input-radio" value="6" >Shawn Mendes
                </label><br><br>
                <button type="submit" class="next-button">Next</button>
            </div>
        </form>
    </div>

    <script src="script_p2e.js"></script>
</body>
</html>
