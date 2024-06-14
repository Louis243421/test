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

// Funzione per l'inserimento
function inserimento($titolo, $anno, $genere) {
    global $conn;
    $sql = "INSERT INTO film (titolo, anno_uscita, genere) VALUES ('$titolo', '$anno', '$genere')";

    if ($conn->query($sql) === TRUE) {
        echo "Film inserito con successo";
    } else {
        echo "Errore durante l'inserimento: " . $conn->error;
    }
}

// Funzione per la ricerca
function ricerca($cosa, $dove) {
    global $conn;
    $sql = "SELECT $cosa FROM $dove";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output dei dati di ogni riga
        while ($row = $result->fetch_assoc()) {
            echo $row[$cosa] . "<br>";
        }
    } else {
        echo "0 risultati";
    }
}

// Verifica se il metodo di richiesta ? POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ottieni i dati dal form e sanitizza
    $titolo = isset($_POST['titolo']) ? $conn->real_escape_string($_POST['titolo']) : '';
    $anno = isset($_POST['annoU']) ? $conn->real_escape_string($_POST['annoU']) : '';
    $genere = isset($_POST['genere']) ? $conn->real_escape_string($_POST['genere']) : '';

    // Controlla se tutti i campi sono stati riempiti
    if ($titolo && $anno && $genere) {
        inserimento($titolo, $anno, $genere);
    } else {
        echo "Tutti i campi sono obbligatori.";
    }

    ricerca('titolo', 'film');
}

// Chiudi la connessione
$conn->close();
?>
