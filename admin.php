<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gino's Studios</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        label {
            color: white;
        }
    </style>
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
            <form action="db.php" method="GET">
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

            <!-- form attori -->
            <p>
                <label for="nome">Nome dell'attore</labe >
                <input type="text" name="nomeA" id="nomeA">
            </p>
            <p>
            <label for="data_nascita">Data di nascita</label>
            <input type="text" name="annoA" id="annoA">
            </p>

             <!-- form registi -->
             <p>
                <label for="nome">Nome del regista</labe >
                <input type="text" name="nomeR" id="nomeR">
            </p>
            <p>
            <label for="data_nascita">Data di nascita</label>
            <input type="text" name="annoR" id="annoR">
            </p>
            <input type="submit" value="invia"></input>
            </form>
            
  
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>
