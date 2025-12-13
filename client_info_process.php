<?php
require 'db.php';

$first_name=$_POST['first_name'];
$surname=$_POST['surname'];
$city=$_POST['city'];
$adres=$_POST['adres'];
$postcode=$_POST['postal_code'];
$email=$_POST['email'];


//database_insert($conn,'klant','id,voornaam,achternaam,woonplaats,woonadres,postcode,email,','NULL,'.$first_name.','.$surname.','.$city.','.$adres.','.$postcode.','.$email);




$insert=$conn->prepare('INSERT INTO klant (id,voornaam,achternaam,woonplaats,woonadres,postcode,email) VALUES (NULL,"'.$first_name.'","'.$surname.'","'.$city.'","'.$adres.'","'.$postcode.'","'.$email.'");');
$insert->execute();
?>