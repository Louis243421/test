<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Modulo Email</title>
</head>
<body>

<?php include "index.php"?>
    <form action="register.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

		<label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <input type="submit" value="Invia">
    </form>
</body>
</html>
