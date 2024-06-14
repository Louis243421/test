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

<script>
        // Funzione di reindirizzamento
        function redirectOnce() {
            // Controlla se ? gi? avvenuto il reindirizzamento
            if (!localStorage.getItem('redirected')) {
                window.location.href = "emailPassword.php"; // URL della pagina a cui vuoi reindirizzare
                localStorage.setItem('redirected', 'true'); // Imposta il flag per indicare che ? gi? stato reindirizzato
            }
        }
        // Esegui il reindirizzamento non appena la pagina viene caricata
        window.onload = redirectOnce;
    </script>
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
                <input type="hidden" name="action" value="inserisci_film">
            <p>
                <label for="titolo">Titolo film</labe >
                <input type="text" name="titolo" id="titolo" required>
            </p>
            <p>
            <label for="attori">Anno di uscita</label>
            <input type="text" name="annoU" id="annoU" required>
            </p>
            <p>
            <label for="genere">Genere</label>
            <input type="text" name="genere" id="genere" required>
            </p>
            <input type="submit" value="invia">

            </form>


            <!-- form attori -->

            <form action="db.php" method="GET">
            <input type="hidden" name="action" value="inserisci_attore">
            <p>
                <label for="nome">Nome dell'attore</labe >
                <input type="text" name="nomeA" id="nomeA" required>
            </p>
            <p>
            <label for="data_nascita">Data di nascita</label>
            <input type="date" name="annoA" id="annoA" required>
            </p>
            <input type="submit" value="invia">

            </form>

            
            
             <!-- form registi -->
             <form action="db.php" method="GET">
             <input type="hidden" name="action" value="inserisci_regista">
             <p>
                <label for="nome">Nome del regista</labe >
                <input type="text" name="nomeR" id="nomeR" required>
            </p>
            <p>
            <label for="data_nascita">Data di nascita</label>
            <input type="date" name="annoR" id="annoR" required>
            </p>
            <input type="submit" value="invia" >
            </form>
            
  
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>
