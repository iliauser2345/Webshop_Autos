<?php
require 'db.php';
session_start();
//ORDER PAGE

    $first_name=$_POST['first_name'];
    $surname=$_POST['surname'];
    $city=$_POST['city'];
    $adres=$_POST['adres'];
    $postcode=$_POST['postal_code'];
    $email=$_POST['email'];
    $insert=$conn->prepare('INSERT INTO klant (id,voornaam,achternaam,woonplaats,woonadres,postcode,email) VALUES (NULL,"'.$first_name.'","'.$surname.'","'.$city.'","'.$adres.'","'.$postcode.'","'.$email.'");');
    $insert->execute();




//LOG IN PAGE

    $gebruikersnaam=$_POST['username'];
    $wachtwoord=$_POST['password'];
    for($i=0;count($users);$i++){
        if($users[$i]['gebruikersnaam']===$gebruikersnaam || $users[$i]['wachtwoord']===$wachtwoord){
            echo "Logged in as".$users[$i]['gebruikersnaam'];
            $_SESSION['admin']=$users[$i]['admin_status'];
            header('./index.php');
        }
    }





//database_insert($conn,'klant','id,voornaam,achternaam,woonplaats,woonadres,postcode,email,','NULL,'.$first_name.','.$surname.','.$city.','.$adres.','.$postcode.','.$email);




$insert=$conn->prepare('INSERT INTO klant (id,voornaam,achternaam,woonplaats,woonadres,postcode,email) VALUES (NULL,"'.$first_name.'","'.$surname.'","'.$city.'","'.$adres.'","'.$postcode.'","'.$email.'");');
$insert->execute();
?>