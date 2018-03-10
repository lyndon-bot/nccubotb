<?php

Function register(){

    include "Functions.php";

    $email = $_POST['Email'];
    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
    $pass = $_POST['Password'];
    

    query("insert into user (Email,Password) values ('$email','$pass')");
    
    $U_id = query("select * from user where Email ='$email'"); 
    $RU_id = mysqli_fetch_assoc($U_id);
    $FU_id = $RU_id['U_ID'];
    if(isset($_POST['URL'])){
        $url = $_POST['URL'];
        echo $url;
        query("insert into ytcomp (U_ID,Yturl,TotalVotes) values ('$FU_id','$url','0')");
        
    }

    session_start();

    
    $_SESSION['U_ID'] = $U_id;
    $_SESSION['Email'] = $email;





}

register();
//header('location:../Pages/Home.php');

?>