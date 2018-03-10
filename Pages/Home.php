
<?php 

include "../Functions/Header.php";

?>

<div class="row" style="width:95%; margin-right:auto; margin-left:auto; height:100%; margin-bottom:80px;">
    <div class="col-lg-4 col-md-4 col-sm-4" style=" margin-top:80px;  height:600px;" class="">
       
       <div class="row">
            <a href="https://www.nfl.com/now"><div class="col-lg-12 col-md-12 col-sm-12 " style="margin-bottom:10px;" class="">
                
                <video playsinline autoplay muted poster="polina.jpg" id="" style="height:; width:100%;">
                    <source src="../IMG-VID/videoplayback.mp4" type="video/mp4">
                    
                </video> 
                    <div > <h3 style="text-align:center;"> NFL Live </h3> </div>
            </div></a>

                <a href="Player_QA.php" ><div class="col-lg-12 col-md-12 col-sm-12 " style="  width:100%; margin-bottom: 80px;" class="">
                    <video playsinline autoplay muted poster="polina.jpg" id="" style="height:; width:100%;">
                        <source src="../IMG-VID/Q&A_ Palestinian-American NFL Player Oday Aboushi.mp4" type="video/mp4">
                    </video> 
                    <div > <h3 style="text-align:center;"> Player Q & A </h3> </div>
            </div></a>
        </div>
    </div>

    <div class="col-lg-8 col-md-8 col-sm-8" style=" margin-top:80px; margin-bottom:; height:600px;" class="">
        
        <div class="col-lg-12 col-md-12 col-sm-12" style=" margin-bottom: 30px; height:400px;" class="">

            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/n5eUG2f0fFg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <script type="text/javascript">
                    var clicks = 0;
                    function incr() {
                    clicks += 1;
                    document.getElementById("clicks").innerHTML = clicks;
                    };
                </script>
            <button class="btn btn-primary" style="width:100%; margin-top:20px;" onClick="incr()"> Vote </button>
            <h3>Votes: <a id="clicks">0</a></h3>    
        </div>

         <div class="col-lg-12 col-md-12 col-sm-12 " style=" height:400px; width:100%" class="">
                
        </div>
    </div>

</div>

<?php
include "../Functions/Footer.php";
?>