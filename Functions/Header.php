<?php

    include "conn.php";


?>


<html> 

    <head> 
        <link rel="stylesheet" href="../Style/css/bootstrap.css">
    </head> 

    <body>

       <nav class="navbar navbar-inverse navbar-fixed-top">
			      <div class="container-fluid">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			          <a id="home1" class="navbar-brand" href="../Pages/dash.php">NFL Central Point</a>
			        </div>
			        <div id="navbar" class="navbar-collapse collapse">
			          <ul class="nav navbar-nav navbar-right">
			            <li><a id="home" href="../Pages/dash.php">Welcome,</a></li>
			            <li><a href="../Pages/Profile.php">Profile</a></li>
			            <li><a href="../Pages/help.php">Help</a></li> 

			             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Actions<span class="caret"></span></a>
        					<ul class="dropdown-menu">
					          <li><a href="../Pages/dash.php">Overview</a></li>
					          <li><a href="../Pages/CartO.php">Checkout Cart</a></li>
					          <li><a href="../Pages/CartI.php">Check-In Cart</a></li>
					            <li><a href="../Pages/Info.php">Reports</a></li>
					        </ul>
					     </li>

			            <li><a href="../Functions/logout.php">Logout</a></li>

			           
			          </ul>
			        </div>
			      </div>
			    </nav>


    </body>
    
    </html>