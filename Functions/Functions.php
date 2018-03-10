<?php



Function query($text){
    
    include "conn.php";
    return mysqli_query($conn,$text);
}

?>