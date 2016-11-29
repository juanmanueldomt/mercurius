<!DOCTYPE html>
<html lan="es">

<head>
    <title>Boletin-UPIICSA</title>
    <meta charset="utf-8">
    <!-- BOOTSTRAP -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="resources/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <!-- Optional theme -->
    <!-- JQUERY -->
    <script src="resources/jquery/jquery-3.1.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="resources/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <!-- FIN-->
    <style type="text/css">
        .carousel {}
        
        .tales {
            width: 100%;
        }
        
        .carousel-inner {
            background: #2f4357;
            width: 100%;
            max-height: 400px;
        }
        
        .carousel .item img {
            margin: 0 auto;
            /* Align slide image horizontally center */
            min-height: 150px;
            max-height: 200px;
        }
        
        .container {
            margin: 0 0 0 0;
            padding: 0 0 0 0;
        }
        
        .carousel-caption {
            background: rgba(255,255,255,0);
            background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(0,0,0,0.8) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,0)), color-stop(100%, rgba(0,0,0,0.8)));
            background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(0,0,0,0.8) 100%);
            background: -o-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(0,0,0,0.8) 100%);
            background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(0,0,0,0.8) 100%);
            background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(0,0,0,0.8) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#000000', GradientType=0 );
            left:0px;
            right:0px;
            bottom: 0px;
                        }
        .media-object{
            width: 110px;
        }
        .media{
            padding-left: 20px;
        }
        
    </style>
</head>

<body>

    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="resources/images/slide/banner01.jpg">
                    <div class="carousel-caption">
                        Noticia 1: Este es un titulo largo
                    </div>
                </div>

                <div class="item">
                    <img src="resources/images/slide/banner02.jpg">
                    <div class="carousel-caption">
                        Titulo de la Noticia:descripcion de la noticia
                    </div>
                </div>

                <div class="item">
                    <img src="resources/images/slide/banner03.jpg">
                    <div class="carousel-caption">
                        Titulo de la Noticia entre otras cosas
                    </div>
                </div>

                <div class="item">
                    <img src="resources/images/slide/banner04.jpg">
                    <div class="carousel-caption">
                        Titulo de la Noticia ponga aqui algo porfavoor
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    <?php
        $i=1;
        while($i<10){
            echo'<div class="media">';
            echo'<div class="media-left">';
            echo'<img src="resources/images/ColoresUpiicsa.jpg" class="media-object">';
            echo'</div>';
            echo'<div class="media-body">';
            echo'<h4 class="media-heading">El titulo numero ';
            echo $i;
            echo' de todas las demas noticias</h4>';
            echo'<p>Descripcion de la noticia</p>';
            echo'</div>';
            echo'</div>';
            $i++;
        }
        
        ?>

    </div>

</body>

</html>