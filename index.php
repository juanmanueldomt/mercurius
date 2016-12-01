
<html>

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
    <link rel="stylesheet" href="resources/bootstrap-3.3.5-dist/css/bootstrap-theme-mercurius.css">
    <!-- FIN-->

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
<img id='loading' src='img/loading.gif'>
<div id="demoajax" cellspacing="0"></div>


    <?php /*
        include('db.php');
        $sql = "SELECT * FROM NOTICIA";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            echo'<div class="media">';
            echo'<div class="media-left">';
            echo'<img src="resources/images/ColoresUpiicsa.jpg" class="media-object">';
            echo'</div>';
            echo'<div class="media-body">';
            echo'<h4 class="media-heading">'.$row[TITULO].'</h4>';
            echo'<p>'.substr($row[CONTENIDO],0,70).'...</p>';
            echo'</div>';
            echo'</div>';              
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        */
        ?>


    </div>
</body>
<script type="text/javascript" src="script.js"></script> 
</html>
