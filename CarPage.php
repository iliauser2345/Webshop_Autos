<?php

    include "db.php";
    $id=$_GET['ID'];
    $car_on_page_data=$imp_form_data_cars[$id];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Webshop-<?php echo $car_on_page_data['merk']." ".$car_on_page_data['model'];?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./includes/css/style.css">
    </head>
    <body class="car_page">
        <?php require './includes/header.php';?>
        <main>
            <?php
                echo 
                "<h2 class='name_car'>
                    ".$car_on_page_data['merk']." ".$car_on_page_data['model']."
                </h2>
                <img src=".$car_on_page_data['image']." alt='car_image_on_page' class='car_img_on_page'
                <h3 class='price_and_desc_car'>
                    ".$car_on_page_data['prijs']." EUR
                </h3>
                <h3 class='price_and_desc_car'>
                    ".$car_on_page_data['kilometerstand']."km
                </h3>
                <h3 class='price_and_desc_car'>
                    ".$car_on_page_data['transmissie']."
                </h3>
                <h3 class='price_and_desc_car'>
                    ".$car_on_page_data['brandstof']."
                </h3>
                <p class='desc_car'>
                    ".$car_on_page_data['beschrijving']."
                </p>
                <form action='OrderPage.php' method='GET'>
                    <input type='hidden' name='id_auto' value='$id'>
                    <button type='submit'><h2>Bestellen</h2></button>
                </form>";
            ?>
        </main>
        <?php require './includes/footer.php';?>
    </body>
</html>