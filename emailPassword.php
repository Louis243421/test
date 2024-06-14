<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        function inviaDati(event) {
            event.preventDefault(); // Prevenire l'invio predefinito del modulo

            var EmailCorretta = "luigi.improta2006@gmail.com";
            var EmailInserita = document.getElementById("email").value;

            var PasswordCorretta = "Pianoforte22";
            var PasswordInserita = document.getElementById("password").value;

            if (EmailCorretta == EmailInserita && PasswordCorretta == PasswordInserita) {
                window.location.href = "admin.php"; // Redirigi alla pagina HTML
            } else if (EmailInserita == "" || PasswordInserita == "") {
                alert("Mancano dei dati");
            } else {
                alert("Le credenziali non sono corrette");
            }
        }
    </script>
</head>
<body>
<?php include 'menu.html'; ?>
    <div class="content">
        <div class="img"></div>
        <div class="center">
            <div class="title">Pagina di Login</div>
            <div class="sub_title" style="font-size: 25px">
            <form id="loginForm" onsubmit="inviaDati(event);">
        <p>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </p>
        <div class="btns">
        <p>
            <input type="submit" value="Invia">
        </p>
        </div>
    </form>
                </div>
           
        </div>
    </div>
    <?php include 'footer.html'; ?>

    
</body>
</html>
