<?php
require "Car_list_TEMP.php"

?>
<ul class="car_list">
    <?php
    for($i=0;$i<count($FCL);$i++){
        echo 
        "<li class='auto_card'>
            <form action='CarPage.php' method='GET'>
                <input type='hidden' name='ID' value='$i'>
                <button type='submit'><img src=".$FCL[$i]['image']." alt='car_image' class='car_img'>
                    <h4 class='car_name'>
                        ".$FCL[$i]['name']." ".$FCL[$i]['model']."                    
                    </h4>
                    <h6 class='car_prod_year'>
                        ".$FCL[$i]['production_year']."
                    </h6>
                    <h6 class='mileage'>
                        ".$FCL[$i]['mileage']." km
                    </h6>
                    <h6 class='price'>
                        ".$FCL[$i]['price']." EUR
                    </h6>
                </button>
            </form>
        </li>";
    }
    ?>

</ul>