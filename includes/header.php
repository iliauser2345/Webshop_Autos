<header class="head_navbar">
    <h1>Wheeldeal</h1>
    <nav>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./inlog_pagina.php">
                <?php if($_SESSION['admin']==1 or $_SESSION['admin']==0){
                    echo "Ingelogd";
                }else{
                    echo "inloggen";
                }?>
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
