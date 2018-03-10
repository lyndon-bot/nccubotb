<?php
session_start();
    include "conn.php";


?>


<html> 

    <head> 
        <link rel="stylesheet" href="../Style/css/bootstrap.css">
    </head> 

    <body style="background-color:#D3D3D3;">

       <nav class="navbar navbar-inverse navbar-fixed-top">
			      <div class="container-fluid">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			          <a id="home1" class="navbar" style=" height: 50px; color: #777; padding: 15px 15px; list-style: none; font-size: 18px;line-height: 0px;" href="../index.php"><img style="height:50px; max-width:50px;" src="../IMG-VID/NFL.png"> NFL Central Point</a>
			        </div>
			        <div id="navbar" class="navbar-collapse collapse">
			          <ul class="nav navbar-nav navbar-right">
			            <li><a id="home" href="../Pages/Home.php">Welcome,<?php echo $_SESSION['Email'];?></a></li>
                        <li><a href="../Pages/Profile.php">My Locker</a></li>
                        <li><a href="../Pages/Chat_room.php">Huddles</a></li>
			            <li><a href="../Functions/logout.php">Logout</a></li>

			           
			          </ul>
			        </div>
			      </div>
			    </nav>


