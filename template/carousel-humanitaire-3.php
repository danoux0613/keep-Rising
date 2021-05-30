<!DOCTYPE html>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/carousel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="myCarousel-3" class="carousel slide keep-style-border-jaune-dmy" data-ride="carousel " style="overflow: hidden;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel-3" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel-3" data-slide-to="1"></li>
            <li data-target="#myCarousel-3" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="./img/Humanitaire/6.jpg" alt="ahava torah" style="width:100%;">
            </div>
            <div class="item">
                <img src="./img/Humanitaire/7.jpg" alt="torah-connection" style="width:100%;">
            </div>
            <div class="item">
                <img src="./img/Humanitaire/8.jpg" alt="Radio shalom" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" style="display: flex;justify-content: center;align-items: center; " href="#myCarousel-3" data-slide="prev">
            <i class="fas fa-arrow-circle-left fa-2x " style="color: #fbb03b;"></i>
        </a>
        <a class="right carousel-control" style="display: flex;justify-content: center;align-items: center; " href="#myCarousel-3" data-slide="next">
            <i class="fas fa-arrow-circle-right fa-2x " style="color: #fbb03b;"></i>
        </a>
    </div>
    </div>

</body>

</html>