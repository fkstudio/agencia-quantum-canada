<!doctype html>
<html lang="en">
  <head>
    <title>Quantum Agencia de Publicidad</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somos una agencia de publicidad,hacemos publicidad, campañas, Estrategias de Marketing, Branding, Fotografía Comercial, Diseño, Media Planning (TV, radio, digital, exterior, print), Promocionales">
    <meta name="keywords" content="publicidad, campañas, Estrategias de Marketing, Branding, Fotografía Comercial, Diseño, Media Planning (TV, radio, digital, exterior, print), Promocionales">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
   <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/assest/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/assest/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/assest/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/jquery.background-video.css" />
  </head>
  <body>
    <?php include('inc/loading.php') ?>
    <div class="container-fluid fade-out">
         <video id="video" style="width: 100%;" class="my-background-video jquery-background-video" loop muted poster="http://syddev.com/jquery.videoBG/assets/tunnel_animation.jpg">
            <source src="images/videos/home.m4v">
            <source src="images/videos/webm/home.webm" type="video/webm">
            <source src="images/videos/ogv/home.ogv" type="video/ogg">
        </video>
    </div>
    <div id="container" class="container-fluid fade-out">
        <div class="row">
            <?php include('inc/social.php') ?>
            <?php include("inc/navbar.php"); ?>
            <div class="col-lg-10 col-md-9 col-sm-12" id="carousel-bounding-box">
                <div class="carousel slide" id="team-carousel">        
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div  class="active item" data-slide-number="0" style="margin-top: 300px;">
                            <P class="home-p">
                                <a href="portafolio.php">Nos</a> gusta cuando la <a href="people.php">gente</a>, <a href="people.php">nuestra gente</a>,
                                siente que esa <a href="portafolio.php">campaña</a> le toca el corazón
                                y sentimos el premio más cuando se nota
                                en las ventas y en la sonrisa del consumidor.   
                            </P>
                        </div>
                        <div  class="item" data-slide-number="1" style="margin-top: 300px;"> 
                            <p class="home-p">
                                Somos una <a href="about.php">agencia</a> de alta creatividad
                                y estrategia. El <a href="people.php">Equipo</a> Quantum es una
                                mezcla de <a href="portafolio.php">trabajo</a> y experiencia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('inc/footer.php') ?>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- lighbox -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.min.js"></script>
    <script src="js/jquery.background-video.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        $(function(){

            $('#team-carousel').carousel({
                interval: 10000
            });

            // When the carousel slides, auto update the text
            $('#team-carousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
            });
        })
    </script>
  </body>
</html>