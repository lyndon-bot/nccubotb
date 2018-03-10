<?php 

function vote(){

    include "Functions.php";

    $U_ID = $_POST['U_ID'];
    $YT_ID = $_POST['YT_ID'];

    $votetally = query("select Total from votestally where YT_ID = '$YT_ID'");
    $votetally += 1;
    query("update votestally set Total = '$votetally' where YT_ID = '$YT_ID' ")
    
}

vote();
header('location:../Pages/Home.php');

?>