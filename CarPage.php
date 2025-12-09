<?php
    include "Car_list_TEMP.php";
    $id=$_GET['ID'];
    $car_on_page_data=$FCL[$id];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Webshop-<?php echo $car_on_page_data['name']." ".$car_on_page_data['model'];?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./includes/css/style.css">
    </head>
    <body>
        <?php require './includes/header.php';?>
        <main>
            <?php
                echo 
                "<h2>
                    ".$car_on_page_data['name']." ".$car_on_page_data['model']."
                </h2>
                <img src=".$car_on_page_data['image']." alt='car_image_on_page' class='car_img_on_page'
                <h3>
                    ".$car_on_page_data['price']." EUR
                </h3>
                <h3>
                    ".$car_on_page_data['mileage']."km
                </h3>
                <p>
                    ".$car_on_page_data['description']."
                </p>";
            ?>
        </main>
        <?php require './includes/footer.php';?>
    </body>
</html>