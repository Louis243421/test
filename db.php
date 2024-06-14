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

// Verifica che le chiavi esistano e non siano null
$titolo = isset($_REQUEST['titolo']) ? $conn->real_escape_string($_REQUEST['titolo']) : null;
$anno = isset($_REQUEST['anno']) ? $conn->real_escape_string($_REQUEST['anno']) : null;
$genere = isset($_REQUEST['genere']) ? $conn->real_escape_string($_REQUEST['genere']) : null;

// Verifica che i valori non siano null prima di usarli
if ($titolo !== null && $anno !== null && $genere !== null) {
    $sql = "INSERT INTO film (titolo, anno_uscita, genere) VALUES ('$titolo','$anno', '$genere')";

    if($conn->query($sql) === true){
        echo "Film inserito con successo";
    } else {
        echo "Errore durante l'inserimento: " . $conn->error;
    }
} else {
    echo "Errore: tutti i campi devono essere compilati.";
}

// Controlla la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

function ricerca($cosa, $dove) {
    global $conn;
    $sql = "SELECT $cosa FROM $dove";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output dei dati di ogni riga
        while($row = $result->fetch_assoc()) {
            echo $row[$cosa] . "<br>";
        }
    } else {
        echo "0 risultati";
    }
}

function insert_db() {
    // Funzione vuota da implementare
}

$conn->close();
?>

