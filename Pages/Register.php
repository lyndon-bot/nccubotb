

<center>
        <html>
            <head>
                <title>Create an account</title>
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
                        <a id="home1" class="navbar" style=" height: 50px; color: #777; padding: 15px 15px; list-style: none; font-size: 18px;line-height: 0px;" href="../index.php"><img style="height:50px; max-width:50px;" src="../IMG-VID/NFL.png"> NFL Central Point</a>
			        </div>
			        <div id="navbar" class="navbar-collapse collapse">
			          <ul class="nav navbar-nav navbar-right">

                        <li><a href="Register.php">Register</a></li>
                        <li><a href="SignIn.php">Login</a></li>

			           
			          </ul>
			        </div>
			      </div>
                </nav>
                
       
        <div style="width:75%; margin-top: 80px; Margin-left:auto; margin-right:auto;"> 
            <form  action="../Functions/Register.php" method="post"> 			
            <h2>Create An Account</h2>
           
            <input class="form-control" type="email" placeholder="Email" Name="Email" value="" required><br>
         
            <input class="form-control" type="text" placeholder="First Name" Name="FirstName" value="" required><br>
           
            <input class="form-control" type="text" placeholder="Last Name" Name="LastName" value="" required><br>	 
        
            <input class="form-control" type="password" placeholder="Password" Name="Password" value="" required><br>
            
            <input class="form-control" type="url" placeholder="URL(optional) For Contestants Only " Name="URL" value="" ><br>

            <button class="btn btn-primary "> Register </button>
            </form>
        </div>

                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
                <script src="../Style/js/bootstrap.min.js"></script>
                <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                <script src="../Style/js/ie10-viewport-bug-workaround.js"></script>
            </body>
            </html>
</center>