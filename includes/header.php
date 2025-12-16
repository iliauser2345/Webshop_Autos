<header class="head_navbar">
    <h1>Wheeldeal</h1>
    <nav>
        <ul>
            <?php
                if($_SESSION['logged_in']==true){
                    echo
                    "<li>
                    <form action='logout.php'>
                        <button type='submit' action='logout.php'>Uitloggen</button>
                    </form>
                    </li>";
                }
            ?>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./inlog_pagina.php">
                <?php
                           if($_SESSION['logged_in']==true){
                                echo "Mijn Cabinet";
                                
                            }elseif($_SESSION['logged_in']==false){
                                echo 'Inloggen';
                            }
                        ?>
            </a></li>
            <li><a href=""> Winkelmand</a></li>
            <?php
                if ($_SESSION['admin']==1 && $_SESSION['logged_in']==true){
                    echo 'admin';}?>
                    
        </ul>
    </nav> 
</header>
