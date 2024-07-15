<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancion</title>
    <link rel="stylesheet" href="style_p3.css">
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
        <h1 id="title" class="text-center">Last Step...</h1>
        <form id="survey-form" action="p3.php" method="post">
            <div class="form-group">
                <h2>What's Your Mood</h2><br>
                <label for="motivational-radio" id="motivational-label" class="singer-label">
                    <input type="radio" id="motivational-radio" name="mood" class="input-radio" value = "1">Motivational
                </label><br>
                <label for="hiphop-radio" id="hiphop-label" class="singer-label">
                    <input type="radio" id="hiphop-radio" name="mood" class="input-radio" value = "2">Hip-hop
                </label><br>
                <label for="romantic-radio" id="romantic-label" class="singer-label">
                    <input type="radio" id="romantic-radio" name="mood" class="input-radio" value = "3">Romantic
                </label><br>
                <label for="sad-radio" id="sad-label" class="singer-label">
                    <input type="radio" id="sad-radio" name="mood" class="input-radio" value = "4">Gloomy
                </label><br>
                <label for="party-radio" id="party-label" class="singer-label">
                    <input type="radio" id="party-radio" name="mood" class="input-radio" value = "5">Party
                </label><br>
                <label for="melody-radio" id="melody-label" class="singer-label">
                    <input type="radio" id="melody-radio" name="mood" class="input-radio" checked value = "6">melody
                </label><br><br>
                <button type="submit" class="next-button">Next</button>
            </div>
        </form>
    </div>

    <script src="script_p3.js"></script>
</body>
</html>
