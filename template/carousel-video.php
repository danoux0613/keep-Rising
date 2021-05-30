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
    <div id="myCarousel-video" class="carousel slide keep-style-border-jaune-dmy" data-ride="carousel " style="overflow: hidden;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel-video" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel-video" data-slide-to="1"></li>
            <li data-target="#myCarousel-video" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner text-center">
            <div class="item active">
                <h6 class="keep-style-text-dmy ">Première interview par Radio Shalom</h6>
                <video  controls style="width: 100%    !important; height: 100%   !important;">
                    <source src="./img/video//Première interview par Radio Shalom.mp4" type="video/mp4">
                    Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
                </video>
            </div>
            <div class="item">
                <h6 class="keep-style-text-dmy text-center">Interview dans « Du coté de chez Szwarc »</h6>
                <video  controls style="width: 100%    !important; height: 100%   !important;">
                    <source src="./img/video/Interview dans « Du coté de chez Szwarc ».mp4" type="video/mp4">
                    Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
                </video>
            </div>
            <div class="item">
                <h6 class="keep-style-text-dmy text-center">Interview par Jplace</h6>
                <video  controls style="width: 100%    !important; height: 100%   !important;">
                    <source src="./img/video/Interview par Jplace.mp4" type="video/mp4">
                    Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
                </video>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" style="display: flex;justify-content: center;align-items: center; " href="#myCarousel-video" data-slide="prev">
                <i class="fas fa-arrow-circle-left fa-2x " style="color: #fbb03b;"></i>
            </a>
            <a class="right carousel-control" style="display: flex;justify-content: center;align-items: center; " href="#myCarousel-video" data-slide="next">
                <i class="fas fa-arrow-circle-right fa-2x " style="color: #fbb03b;"></i>
            </a>
        </div>
    </div>
    <script>
        $(".carousel").swipe({

            swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

                if (direction == 'left') $(this).carousel('next');
                if (direction == 'right') $(this).carousel('prev');

            },
            allowPageScroll: "vertical"

        });
    </script>

</body>

</html>