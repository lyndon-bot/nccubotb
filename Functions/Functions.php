<?php



Function query($text){
    
    include "conn.php";
    $query = mysqli_query($conn,$text);
}

?>