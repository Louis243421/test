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

            <form>
	
<p>Inserisci Titolo Film</p>
<input type="text" name="film" id="film">

<br>

<p>Inserisci Anno di uscita</p>
<input type="annoU" name="annoU" id="annoU">
<br><br>
<input type="button" name="Invia Dati" value="Invia Dati" onclick="">

</form>
            <div class="btns">
                <button onclick="window.location.href='about.php'">Learn More</button>
            </div>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>
