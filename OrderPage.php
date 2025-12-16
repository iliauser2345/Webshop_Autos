<?php
require 'db.php';
$order=$_GET['id_auto'];
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bestel je auto</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./includes/css/style.css">
    </head>
    <body class="order_page">
        <?php require './includes/header.php'?>
        <main>
            <h2>Bestel je auto</h2>
            <h3>Zodat we kunnen uw bestelling verwerken, we hebben bepaalde informatie van u nodig.</h3>
            <form method="POST" action="client_info_process.php">
                <input type="text" name="first_name" placeholder="Voornaam"><br>
                <input type="text" name="surname" placeholder="Achternaam"><br>
                <input type="text" name="city" placeholder="Woonplaats"><br>
                <input type="text" name="adres" placeholder="Straat en huisnummer"><br>
                <input type="text" name="postal_code" placeholder="Postcode(1234 VB)"><br>
                <input type="text" name="email" placeholder="Email(voorbeeld@email.nl)"><br>
                <button type="submit">Versturen</button>
            </form>
        </main>
        <?php require './includes/footer.php'?>
    </body>
</html>