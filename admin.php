<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gino's Studios</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
</head>
<body>
    <?php include 'menu.html'; ?>
    <div class="content">
        <div class="img"></div>
        <div class="center">
            <div class="title">Benvenuto in Admin</div>
            <div class="sub_title" style="font-size: 25px">
            Inserisci qui i nuovi elementi:
            </div>

<form action="db.php" method="POST">
<p>
    <label for="titolo">Titolo film</labe >
    <input type="text" name="titolo" id="titolo">
</p>
<p>
<label for="attori">Anno di uscita</label>
<input type="text" name="annoU" id="annoU">
</p>
<p>
<label for="genere">Genere</label>
<input type="text" name="genere" id="genere">
</p>
</form>

            <div> class="btns">
                <button onclick="window.location.href='about.php'">Invia Dati</button>
            </di>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>
