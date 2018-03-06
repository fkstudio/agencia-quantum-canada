<!doctype html>
<html lang="en">
  <head>
    <title>Nosotros | Quantum Agencia de Publicidad</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somos una agencia de publicidad,hacemos publicidad, campañas, Estrategias de Marketing, Branding, Fotografía Comercial, Diseño, Media Planning (TV, radio, digital, exterior, print), Promocionales">
    <meta name="keywords" content="publicidad, campañas, Estrategias de Marketing, Branding, Fotografía Comercial, Diseño, Media Planning (TV, radio, digital, exterior, print), Promocionales">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" />
   <link rel="stylesheet" href="css/jquery.background-video.css" />
  </head>
  <body>
    <?php include('inc/loading.php') ?>
    <div class="container-fluid fade-out">
        <video id="video" style="width: 100%;" class="my-background-video jquery-background-video" loop muted poster="http://syddev.com/jquery.videoBG/assets/tunnel_animation.jpg">
            <source src="images/videos/about.m4v">
            <source src="images/videos/webm/about.webm" type="video/webm">
            <source src="images/videos/ogv/about.ogv" type="video/ogv">
        </video>
    </div>
    <div id="container" class="container-fluid fade-out">
        <div class="row">
            <?php include('inc/social.php') ?>
            <?php include("inc/navbar.php"); ?>
            <div class="col-lg-10 col-md-9">
                <div class="col-lg-11 col-md-12 about-bg">
                    <h3 class="primary-title">¿QUÉ HACEMOS?</h3>
                    <div class="clearfix"></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about-icon">
                        <img src="images/Logos/creatividad.png" style="margin: 0 auto" class="img-responsive" />
                        <h4>Creatividad</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about-icon">
                        <img src="images/Logos/desarrollo-de-campanas.png" style="margin: 0 auto" class="img-responsive" />
                        <h4>Desarrollo de Campañas</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about-icon">
                        <img src="images/Logos/estrategia-de-marketing.png" style="margin: 0 auto" class="img-responsive" />
                        <h4>Estrategias de Marketing</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about-icon">
                        <img src="images/Logos/branding.png" style="margin: 0 auto" class="img-responsive" />
                        <h4>Branding</h4>
                    </div>
                    <div class="clearfix visible-lg visible-md"></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about-icon">
                        <img src="images/Logos/fotografia-comercial.png" style="margin: 0 auto" class="img-responsive" />
                        <h4>Fotografía Comercial</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about-icon">
                        <img src="images/Logos/diseno.png" style="margin: 0 auto" class="img-responsive" />
                        <h4>Diseño</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about-icon">
                        <img src="images/Logos/media-plaining.png" style="margin: 0 auto" class="img-responsive" />
                        <h4>Media Planning (TV, radio, digital, exterior, print)</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about-icon">
                        <img src="images/Logos/promocionales.png" style="margin: 0 auto" class="img-responsive" />
                        <h4>Promocionales</h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include('inc/footer.php') ?>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/jquery.background-video.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>