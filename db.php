<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Configurazione dei dettagli di connessione al database
$servername = "localhost:3306";  // Cambia se necessario
$username = "Gino";
$password = "gino1gino2";
$dbname = "film";

// Crea la connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controlla la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

function ricerca($cosa,$dove){
    global $conn;
    $sql = "SELECT $cosa FROM $dove";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output dei dati di ogni riga
    while($row = $result->fetch_assoc()) {
        echo  $row["$cosa"]. "<br>";
    }
} else {
    echo "0 risultati";
}

}
print("<strong style='font-size: 20px;'>I nostri film:</strong>");
ricerca("titolo","film");
print("<br>");
print("<strong style='font-size: 20px;'>I nostri registi:</strong>");
ricerca("nome","registi");


$conn->close();
?>

