
<html> 

<head> 
    <link rel="stylesheet" href="../Style/css/bootstrap.css">
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

<video playsinline autoplay muted poster="polina.jpg" id="bgvid">
    <source src="IMG-VID/loop1.mp4" type="video/mp4">
</video>
