<?php
// Creare (o aprire) il database SQLite
$db = new SQLite3('payments.db');

// Creare la tabella payments
$query = 'CREATE TABLE IF NOT EXISTS payments (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL,
    amount REAL NOT NULL,
    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)';
$db->exec($query);

echo "Database and table created successfully.";
?>
