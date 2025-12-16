<header class="head_navbar">
    <h1>Wheeldeal</h1>
    <nav>
        <ul>
            <?php
            try{ 
                if($_SESSION['logged_in']==true){
                    echo
                    "<li>
                    <form action='logout.php'>
                        <button type='submit' action='logout.php'>Uitloggen</button>
                    </form>
                    </li>";
                }}catch(Exception $a){
                    echo " ";
                }
            ?>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./inlog_pagina.php">
                <?php try{
                            if($_SESSION['admin']==1 or $_SESSION['admin']==0){
                                echo "Mijn Cabinet";
                                $_SESSION['logged_in']=true;
                            }
                        }catch(Exception $b){
                            echo "Inloggen";}?>
            </a></li>
            <li><a href=""> Winkelmand</a></li>
            <?php try{
                    if ($_SESSION['admin']==1){
                        echo 'admin';}
                    }catch(Exception $i){
                        echo ' ';}?>
        </ul>
    </nav> 
</header>
