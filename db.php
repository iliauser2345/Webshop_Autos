<?php
// Database connection - pas de waarden hieronder aan voor jouw omgeving
$host = '37.97.136.170';
$db   = 'webshop_autos';
$user = 'webshop_autos_db_user';
$pass = 'CGLu7uhxghf*_s72';
$charset = 'utf8mb4';

$SQL_querry='SELECT id,merk,model,prijs,bouwjaar,kilometerstand,transmissie,brandstof,beschrijving,image FROM autos;';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
	$conn = new PDO($dsn, $user, $pass, $options);
	//echo 'je bent in';
	$sql_data= $conn->prepare($SQL_querry);
    $sql_data-> execute();
    $sql_data->setFetchMode(PDO::FETCH_ASSOC);
    $imp_form_data_cars = $sql_data->fetchAll();
	//var_dump($imp_form_data_cars);
   // foreach($imp_form_data_cars as $key => $value){
     //   foreach($value as $sleutel => $waarde)
       // echo $sleutel." ".$waarde."<br>";
   // }

} catch (PDOException $e) {
	// In productie nooit de volledige foutmelding tonen
	echo 'Verbinding met database mislukt: ' . htmlspecialchars($e->getMessage());
	exit;
}

// Gebruik de variabele $conn in andere scripts na include/require

//kut mongooooooool
?>

