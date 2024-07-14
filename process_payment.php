<?php
// Aprire il database SQLite
$db = new SQLite3('payments.db');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizzazione dei dati per evitare SQL injection
    $name = $db->escapeString($_POST['name']);
    $email = $db->escapeString($_POST['email']);
    $amount = floatval($_POST['amount']);

    // Inserire i dati nella tabella payments
    $query = "INSERT INTO payments (name, email, amount) VALUES ('$name', '$email', $amount)";
    $result = $db->exec($query);

    if ($result) {
        echo "Payment successfully recorded!";
    } else {
        echo "Error: " . $db->lastErrorMsg();
    }
}
?>
