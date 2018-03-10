
<?php 

include "../Functions/Header.php";

?>

<div class="row" style="width:95%; margin-right:auto; margin-left:auto; height:100%;">
    <div class="col-lg-6 col-md-6 col-sm-6" style=" margin-top:80px;  height:600px;" class="">
       
       <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 panel panel-default" style=" margin-bottom: 30px; height:170px;" class="">
                     <img style="height:100%;width:100%; margin-top:0px;" src="../IMG-VID/NFL-Game-Pass.png">

                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 panel panel-default" style=" margin-bottom: 30px; height:170px;" class="">
                     <img style="height:100%;width:100%; margin-top:0px;" src="../IMG-VID/PI-NFL-Packers-Draft-Chat.vadapt.767.high.14.jpg">

                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 panel panel-default" style=" margin-bottom: 30px; height:170px;" class="">
                    <img style="height:100%;width:100%; margin-top:0px;" src="../IMG-VID/NFL-Game-Pass.png">    

            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6" style=" margin-top:80px; margin-bottom: 20px; height:600px;" class="">
        
        <div class="col-lg-12 col-md-12 col-sm-12" style=" margin-bottom: 30px; height:400px;" class="">

            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/U_DHpdrx0ZE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <script type="text/javascript">
                    var clicks = 0;
                    function incr() {
                    clicks += 1;
                    document.getElementById("clicks").innerHTML = clicks;
                    };
                </script>
            <button class="btn btn-primary" style="width:100%; margin-top:20px;" onClick="incr()"> Vote </button>
            <p>Votes: <a id="clicks">0</a></p>    
        </div>

    </div>

</div>

<?php
include "../Functions/Footer.php";
?>