<?php
if(isset($_POST["Submit"])) {
$Username=$_POST["Username"];
$Password=$_POST["Password"];

if($Username=="Jazeb" && $Password=="Akram")
{
	echo "<h2>Welcome : {$_POST["Username"]}</h2>";
}else{
	echo "<h2>Account Does't Exists | Try Again</h2>";
}
}
else {
	echo "<h2>Login Required</h2>";
}


?>




<!DOCTYPE>

<html>

	<img style="display: block; margin: 0 auto;" src="NFL.jpg" alt=""/>

   
</html>


