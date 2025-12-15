<?php
require 'db.php';
session_start();
$gebruikersnaam=$_POST['username'];
$wachtwoord=$_POST['password'];
    for($i=0;count($users);$i++){
        if($users[$i]['gebruikersnaam']===$gebruikersnaam || $users[$i]['wachtwoord']===$wachtwoord){
           // echo "Logged in as ".$users[$i]['gebruikersnaam'];
            $_SESSION['admin']=$users[$i]['admin_status'];
            header("Location:index.php");
            exit();
        }
    }


?>