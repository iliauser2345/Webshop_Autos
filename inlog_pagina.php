<?php
session_start();
require './db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inloggen</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./includes/css/style.css">
    </head>
    <body class="pagina_inhoud_inloggen">
        <?php require './includes/header.php'?>
        <main>
            <h2>Log in</h2>
            <form method="POST" action="login_data_processing.php">
                <input type="text" name="username" placeholder="Voornaam"><br>
                <input type="text" name="password" placeholder="Achternaam"><br>
                <button type="submit">Inloggen</button>
            </form>
        </main>
        <?php require './includes/footer.php'?>
    </body>
</html>