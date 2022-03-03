<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Muziek</title>
</head>
<body>
    <form method="GET" action="gegevens.php">
        <label for="name">Artiest</label>
        <input type="text" id="artist" name="artist" value=""><br><br>
        <label for="name">Titel</label>
        <input type="text" id="liedje" name="liedje" value=""><br><br>
        <label for="name">jaar van uitkomst</label>
        <input type="text" id="uitgave" name="uitgave" value=""><br><br>
        <label for="name">muzieksoort</label>
        <input type="text" id="muzieksoort" name="muzieksoort" value=""><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<!-http://localhost/PHP-ADVANCED/3-Forms/Opdracht-3.3/gegevens.php?artist=RHCP&liedje=Can%27t+stop&uitgave=2003&muzieksoort=Rock->
