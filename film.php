<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gino's Studios</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <?php include 'menu.html'; ?>
        <div id="film">
            <?php
                print("<strong>I nostri film:</strong><br>");
                ricerca("titolo","film");
            ?>
        </div>
        <div id="registi">
            <?php
                print("<strong>I nostri registi:</strong><br>");
                ricerca("nome","registi");
            ?>
        </div>
        <div id="attori">
            <?php
                print("<strong>I nostri attori:</strong><br>");
                ricerca("nome","attori");
            ?>
        </div>

    <?php include 'footer.html'; ?>
</body>
</html>
