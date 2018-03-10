<?php

include "conn.php";
session_unset();
mysqli_close();

header('location:../index.php');

?>