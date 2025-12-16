<header class="head_navbar">
    <h1>Wheeldeal</h1>
    <nav>
        <ul>
            <?php 
                if($_SESSION['logged_in']==true){
                    echo
                    "<li>
                        <button type='submit' action='logout.php'>Uitloggen</button>
                    </li>";
                }
            ?>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./inlog_pagina.php">
                <?php if($_SESSION['admin']==1 or $_SESSION['admin']==0){
                    echo "Mijn Cabinet";
                    $_SESSION['logged_in']=true;
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
