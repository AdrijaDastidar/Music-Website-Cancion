<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancion</title>
    <link rel="stylesheet" href="style_p1.css">
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
        <h1 id="title" class="text-center">Welcome to Cancion</h1>
        <form id="survey-form" action="p1.php" method="post">
            <div class="form-group">
                <h2>Select Your Language</h2><br><br><br>
                <label for="english-radio" id="english-label">
                    <input type="radio" id="english-radio" name="language" class="input-radio" value="1" checked>English
                </label>
                <label for="hindi-radio" id="hindi-label">
                    <input type="radio" id="hindi-radio" name="language" value="2" class="input-radio">Hindi
                </label><br><br>
                <button type="submit" class="next-button">Next</button>
            </div>
        </form>
    </div>

    <script src="script_p1.js"></script>
</body>
</html>
