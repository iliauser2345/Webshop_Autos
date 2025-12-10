<?php
// Database connection - pas de waarden hieronder aan voor jouw omgeving
$host = '127.0.0.1';
$db   = 'your_database';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
	$pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
	// In productie nooit de volledige foutmelding tonen
	echo 'Verbinding met database mislukt: ' . htmlspecialchars($e->getMessage());
	exit;
}

// Gebruik de variabele $pdo in andere scripts na include/require

//kut mongooooooool
?>

