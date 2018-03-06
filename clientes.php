<!doctype html>
<html lang="en">
  <head>
    <title>Clientes | Quantum Agencia de Publicidad</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/jquery.background-video.css" />
  </head>
  <body>
    <?php include('inc/loading.php') ?>
    <div class="container-fluid fade-out">
        <video id="video" style="width: 100%;" class="my-background-video jquery-background-video" loop muted poster="http://syddev.com/jquery.videoBG/assets/tunnel_animation.jpg">
            <source src="images/videos/cliente.m4v">
            <source src="images/videos/webm/cliente.webm" type="video/webm">
            <source src="images/videos/ogv/cliente.ogv" type="video/ogv">
        </video>
    </div>
    <div id="container" class="container-fluid fade-out">
        <div class="row">
            <?php include('inc/social.php') ?>
            <?php include("inc/navbar.php"); ?>
            <div class="col-lg-10 col-md-9">
                <div class="col-lg-11  about-bg">
                    <div class="clearfix"></div>
                    <br/>
                    <div class="col-md-4 work-icon">
                        <img src="images/clientes/la-nacional-financiero.png" style="margin: 0 auto;max-height: 150px;" class="img-responsive" />
                    </div>
                    <div class="col-md-4 work-icon">
                        <img src="images/clientes/la-nacional.png" style="margin: 0 auto;max-height: 150px;" class="img-responsive" />
                    </div>
                    <div class="col-md-4 work-icon">
                        <img src="images/clientes/punto-market.png" style="margin: 0 auto;max-height: 100px;" class="img-responsive" />
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 work-icon">
                        <img src="images/clientes/fruties-bar.png" style="margin: 0 auto;max-height: 250px;" class="img-responsive" />
                    </div>
                    <div class="col-md-4 work-icon">
                        <img src="images/clientes/stimuli.png" style="margin: 0 auto;max-height: 200px;" class="img-responsive" />
                    </div>
                    <div class="col-md-4 work-icon">
                        <img src="images/clientes/karate-do.png" style="margin: 0 auto;max-height: 150px;" class="img-responsive" />
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 work-icon">
                        <img src="images/clientes/colegio-mi-mundo-kids.png" style="margin: 0 auto;max-height: 150px;" class="img-responsive" />
                    </div>
                    <div class="col-md-4 work-icon">
                        <img src="images/clientes/cinnamon2.png" style="margin: 0 auto;max-height: 100px;" class="img-responsive" />
                    </div>
                    <div class="col-md-4 work-icon">
                        <img src="images/clientes/shop.png" style="margin: 0 auto;max-height: 80px;" class="img-responsive" />
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