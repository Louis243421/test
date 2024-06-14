<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ottieni il valore dell'email dal modulo
    $email = $_POST['email'];

    // Fai qualcosa con il valore, ad esempio visualizzarlo
    echo "L'email inserita ?: " . htmlspecialchars($email);
}
?>
