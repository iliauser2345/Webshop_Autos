<?php
require "./includes/db_inlog_ggs.php";
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
];
function database_extract($connection,$querry){
	$sql_data= $connection->prepare($querry);
	$sql_data-> execute();
	$sql_data->setFetchMode(PDO::FETCH_ASSOC);
	$extracted_data = $sql_data->fetchAll();
	return $extracted_data;
}
	try {
		$conn = new PDO($dsn, $user, $pass, $options);
		//echo 'je bent in';
		$imp_form_data_cars = database_extract($conn,'SELECT * FROM autos;');


	} catch (PDOException $e) {
		// In productie nooit de volledige foutmelding tonen
		echo 'Verbinding met database mislukt: ' . htmlspecialchars($e->getMessage());
		exit;
	}

// Gebruik de variabele $conn in andere scripts na include/require

//kut mongoooooooo
?>

