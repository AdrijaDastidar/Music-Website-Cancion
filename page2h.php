<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancion</title>
    <link rel="stylesheet" href="style_p2h.css">
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
                <label for="lata-radio" id="lata-label" class="singer-label">
                    <input type="radio" id="lata-radio" name="FavoriteSinger" class="input-radio" value="7" checked>Lata Mangeshkar
                </label>
                <label for="arijit-radio" id="arijit-label" class="singer-label">
                    <input type="radio" id="arijit-radio" name="FavoriteSinger" class="input-radio" value="8">Arijit Singh
                </label><br>
                <label for="shreya-radio" id="shreya-label" class="singer-label">
                    <input type="radio" id="shreya-radio" name="FavoriteSinger" class="input-radio" value="9" >Shreya Ghoshal
                </label><br>
                <label for="sonu-radio" id="sonu-label" class="singer-label">
                    <input type="radio" id="sonu-radio" name="FavoriteSinger" class="input-radio" value="10" >Sonu Nigam
                </label><br>
                <label for="kishore-radio" id="kishore-label" class="singer-label">
                    <input type="radio" id="kishore-radio" name="FavoriteSinger" class="input-radio" value="11">Kishore Kumar
                </label><br>
                <label for="armaan-radio" id="armaan-label" class="singer-label">
                    <input type="radio" id="armaan-radio" name="FavoriteSinger" class="input-radio" value="12">Armaan Malik
                </label><br><br>
                <button type="submit" class="next-button">Next</button>
            </div>
        </form>
    </div>

    <script src="script_p2h.js"></script>
</body>
</html>
