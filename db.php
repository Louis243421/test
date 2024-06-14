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

    //inserimento film

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['action']) && $_GET['action'] == 'inserisci_film') {
        $titolo = isset($_GET['titolo']) ? $_GET['titolo'] : '';
        $anno = isset($_GET['annoU']) ? $_GET['annoU'] : '';
        $genere = isset($_GET['genere']) ? $_GET['genere'] : '';
    
        if ($titolo && $anno && $genere) {
            $sql = "INSERT INTO film (titolo, anno_uscita, genere) VALUES('$titolo','$anno', '$genere')";
    
            if ($conn->query($sql) === true) {
                echo "Film inserito con successo";
            } else {
                echo "Errore durante inserimento: " . $conn->error;
            }
        } else {
            echo "Tutti i campi sono obbligatori.";
        }
    }
    

    //inserimento attori
    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['action']) && $_GET['action'] == 'inserisci_attore') {
        $nomeA = $_GET['nomeA'];
    $annoA =$_GET['annoA'];

    $sql = "INSERT INTO attori (nome, data_nascita) VALUES('$nomeA','$annoA')";

    if($conn->query($sql) === true){
    echo "film inserito con successo";
    }else{
    echo "Errore durante inserimento:" . $conn->error;
    }

    }
    
    //inserimento registi
    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['action']) && $_GET['action'] == 'inserisci_regista') {
    $nomeR = $_REQUEST['nomeR'];
    $annoR =$_REQUEST['annoR'];

    $sql = "INSERT INTO registi (nome, data_nascita) VALUES('$nomeR','$annoR')";

    if($conn->query($sql) === true){
    echo "film inserito con successo";
    }else{
    echo "Errore durante inserimento:" . $conn->error;
    }

}




function ricerca($cosa,$dove){
    global $conn;
    $sql = "SELECT $cosa FROM $dove";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output dei dati di ogni riga
    while($row = $result->fetch_assoc()) {
        echo  $row["$cosa"];
    }
} else {
    echo "0 risultati";
}

}

?>

