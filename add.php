<?php
// Collegati a un nuovo database (verrà creato se non esiste)
$db = new SQLite3('miodatabase.db');

// Inserisci dati nella tabella usando prepared statements
$stmt = $db->prepare('INSERT INTO utenti (nome, email) VALUES (?, ?)');

$stmt->bindValue(1,$_POST["fname"], SQLITE3_TEXT);
$stmt->bindValue(2, $_POST["email"], SQLITE3_TEXT);
$stmt->execute();

// Seleziona dati dalla tabella
$query = 'SELECT * FROM utenti';
$result = $db->query($query);

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: " . $row['id'] . " - Nome: " . $row['nome'] . " - Email: " . $row['email'] . "\n";
}

// Chiudi la connessione al database
$db->close();
?>