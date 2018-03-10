<?php


function login(){

    include "Functions.php";

    $email = $_POST['Email'];
    $pass = $_POST['Password'];

    $results = query("select * from user where Email = '$email'");
    $value = mysqli_fetch_assoc($results);


    if($email == $value['Email']&& $pass == $value['Password']){

        session_start();

        $U_id = query("select * from user where Email ='$email'"); 
        $RU_id = mysqli_fetch_assoc($U_id);
        $FU_id = $RU_id['U_ID'];
        $_SESSION['Email'] = $email;
        $_SESSION['U_ID'] = $FU_id;

        header('location:../Pages/Home.php');
        

    }else{

        header('location:../index.php');
    }




}

login();

?>