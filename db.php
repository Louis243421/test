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

$titolo = $_REQUEST['titolo'];
$anno =$_REQUEST['anno'];
$genere =$_REQUEST['genere'];


function inserimento($titolo,$anno,$genere)
{
    global $conn;
    $sql = "INSERT INTO film (titolo, anno_uscita, genere) VALUES('$titolo','$anno', '$genere')";

    if($conn->query($sql) === true){
    echo "film inserito con successo";
    }else{
    echo "Errore durante inserimento:" . $conn->error;
    }
    
    // Controlla la connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
}

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";



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

function insert_db(){

}
?>

