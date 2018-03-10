<?php

Function register(){

    include "Functions.php";

    $email = $_POST['Email'];
    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
    $pass = $_POST['Password'];
    

    query("insert into user (Email,Password) values ('$email','$pass')");

    $U_id = query("select U_ID from user where Email ='$email"); 

    if(isset($_POST['URL'])){
        $url = $_POST['URL'];

        query("insert into ytcomp (U_ID,Yturl,TotalVotes) values ('$U_id','$url','0')");
        
    }

    session_start();

    
    $_SESSION['U_ID'] = $U_id;
    $_SESSION['Email'] = $email;





}

register();
header('location:../Pages/Home.php');

?>