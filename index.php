<!DOCTYPE html>
<html lan="es">
    <head>
    <title>Bienvenido</title>
    <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
        <script src="jquery/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap -->    
        
        <style type="text/css">
            .carousel{
                background: #2f4357;
                margin-top: 20px;
            }
            .carousel .item img{
                margin: 0 auto; /* Align slide image horizontally center */
            }
            .bs-example{
	           margin: 20px;
            }
        </style>
        
    </head>
    
    <body>
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicadores del Carrusel -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>   
            <!-- Elementos del Carrusel -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="resources/images/slide/banner01.jpg" alt="First Slide">
                </div>
                <div class="item">
                    <img src="resources/images/slide/banner02.jpg" alt="Second Slide">
                </div>
                <div class="item">
                    <img src="resources/images/slide/banner03.jpg" alt="Third Slide">
                </div>
            </div>
            <!-- Controles -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>        
    </body>
</html>