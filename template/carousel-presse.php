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
    <div id="myCarousel" class="carousel slide keep-style-border-jaune-dmy" data-ride="carousel " style="overflow: hidden;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner text-center">
            <div class="item active">
                <a target="blank" href="img/Actualité-juif.jpg">
                    <img src="img/Actualité-juif.jpg" id="actualité-juif" class="card-img-top keep-style-border-bleu-dmy" alt="actualite juive kr">
                </a>
            </div>
            <div class="item">
                <div class="keep-style-border-bleu-dmy">
                    <img src="img/1-kountras.png" class="card-img-top" alt="Kountrass pt1">
                </div>
            </div>
            <div class="item">
                <div class="keep-style-border-bleu-dmy">
                    <img src="img/2-kountras.png" class="card-img-top" alt="Kountrass pt2">
                </div>
            </div>
            <div class="item">
                <div class="keep-style-border-bleu-dmy">
                    <img src="img/3-kountras.png" class="card-img-top" alt="Kountrass pt3">
                </div>
            </div>
            <div class="item">
                <img src="img/Actualite-israel-journal.jpeg" class="card-img-top keep-style-border-bleu-dmy" alt="Actualite israel">
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" style="display: flex;justify-content: center;align-items: center; " href="#myCarousel" data-slide="prev">
                <i class="fas fa-arrow-circle-left fa-2x " style="color: #fbb03b;"></i>
            </a>
            <a class="right carousel-control" style="display: flex;justify-content: center;align-items: center; " href="#myCarousel" data-slide="next">
                <i class="fas fa-arrow-circle-right fa-2x " style="color: #fbb03b;"></i>
            </a>
        </div>
    </div>

    <!-- <script>
        $(".carousel").swipe({

            swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

                if (direction == 'left') $(this).carousel('next');
                if (direction == 'right') $(this).carousel('prev');

            },
            allowPageScroll: "vertical"

        });
    </script> -->

</body>

</html>