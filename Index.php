
<html> 

<head> 
    <link rel="stylesheet" href="Style/css/bootstrap.css">
        <style>

        video#bgvid { 
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            background: url(polina.jpg) no-repeat;
            background-size: cover; 
        }

        </style>

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
                        <a id="home1" class="navbar" style=" height: 50px; color: #777; padding: 15px 15px; list-style: none; font-size: 18px;line-height: 0px;" href="../Pages/dash.php"><img style="height:50px; max-width:50px;" src="../IMG-VID/NFL.png"> NFL Central Point</a>
			        </div>
			        <div id="navbar" class="navbar-collapse collapse">
			          <ul class="nav navbar-nav navbar-right">

                        <li><a href="../Functions/logout.php">Register</a></li>
                        <li><a href="../Functions/logout.php">Login</a></li>

			           
			          </ul>
			        </div>
			      </div>
                </nav>
                
<video playsinline autoplay muted poster="polina.jpg" id="bgvid">
    <source src="IMG-VID/loop1.mp4" type="video/mp4">
 </video> 
    
    <div>
        <h1 class="brand" style="font-size: 75px; margin-top:250px;text-type:bold; color:white; text-align:center;"> NFL Central Point </h1>
         <button type="button" style="margin-top:100px; margin-bottom:0px; width:300px;" class="btn btn-primary center-block">Login</button>
    <div>
<nav class="navbar navbar-inverse navbar-fixed-bottom">
    
        <p style="">&copy; 2018 National Football League  &middot; <a href="#">Help</a></p>
			        
 </nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="Style/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Style/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>