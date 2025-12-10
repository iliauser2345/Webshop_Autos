<?php
require "db.php"

?>
<ul class="car_list">
    <?php
    for($i=0;$i<count($imp_form_data_cars);$i++){
        echo 
        "<li class='auto_card'>
            <form action='CarPage.php' method='GET'>
                <input type='hidden' name='ID' value='$i'>
                <button type='submit'><img src=".$imp_form_data_cars[$i]['image']." alt='car_image' class='car_img'>
                    <h4 class='car_name'>
                        ".$imp_form_data_cars[$i]['merk']." ".$imp_form_data_cars[$i]['model']."                    
                    </h4>
                    <h6 class='car_prod_year'>
                        ".$imp_form_data_cars[$i]['bouwjaar']."
                    </h6>
                    <h6 class='mileage'>
                        ".$imp_form_data_cars[$i]['kilometerstand']." km
                    </h6>
                    <h6 class='price'>
                        ".$imp_form_data_cars[$i]['prijs']." EUR
                    </h6>
                </button>
            </form>
        </li>";
    }
    ?>

</ul>