<header class="head_navbar">
    <h1>wheeldeal</h1>
    <nav>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./inlog_pagina.php">Inloggen</a></li>
            <li><a href=""> Winkelmand</a></li>
            <?php try{
                    if ($_SESSION['admin']==1){
                        echo 'admin';}
                    }catch(Exception $i){
                        echo ' ';}?>
        </ul>
    </nav> 
</header>
