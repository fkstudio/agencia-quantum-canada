<!doctype html>
<html lang="en">
  <head>
    <title>Portafolio | Quantum Agencia de Publicidad</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somos una agencia de publicidad,hacemos publicidad, campañas, Estrategias de Marketing, Branding, Fotografía Comercial, Diseño, Media Planning (TV, radio, digital, exterior, print), Promocionales">
    <meta name="keywords" content="publicidad, campañas, Estrategias de Marketing, Branding, Fotografía Comercial, Diseño, Media Planning (TV, radio, digital, exterior, print), Promocionales">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="images/png" sizes="192x192"  href="/android-icon-192x192.png">
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
    <link rel="stylesheet" href="css/lightbox.css" />
    <link rel="stylesheet" href="css/jquery.background-video.css" />

    <style>
        .grid-item { width: 190px;  margin-bottom: 10px; cursor: pointer;}
        .grid-item:hover {
            opacity: 0.7;
        }
        .grid-item--width2 { width: 390px; }

    </style>
  </head>
  <body>
    <?php include('inc/loading.php') ?>
    <div class="container-fluid fade-out">
      <video id="video" style="width: 100%;" class="my-background-video jquery-background-video" loop muted poster="http://syddev.com/jquery.videoBG/assets/tunnel_animation.jpg">
          <source src="images/videos/portafolio.m4v">
          <source src="images/videos/webm/portafolio.webm" type="video/webm">
          <source src="images/videos/ogv/portafolio.ogv" type="video/ogv">
      </video>
    </div>
    <div id="container" class="container-fluid fade-out ">
        <div class="row">
            <?php include('inc/social.php') ?>
            <?php include("inc/navbar.php"); ?>
            <div class="col-lg-9 col-md-8 col-xs-12 about-bg">
                <br/>
                <div class="clearfix"></div>
                <div class="grid">
                  <?php 
                    $directorio = "images/portafolio";
                    $gestor_dir = opendir($directorio);
                    $sliderNumber = 1;
                    while (false !== ($nombre_fichero = readdir($gestor_dir))) {
                        $ficheros[] = $nombre_fichero;
                        if($nombre_fichero != ".DS_Store" && $nombre_fichero != "." && $nombre_fichero != ".."){
                  ?>

                    <div class="grid-item" onclick="openModal();currentSlide(<?php echo $sliderNumber ?>)">
                        <img id="grid-item-image-<?php echo $sliderNumber?>" src="images/portafolio/<?php echo $nombre_fichero ?>" class="img-responsive" />
                    </div>
                  <?php
                        $sliderNumber++;
                      }
                    }
                  ?>
                </div> 
                <br/>   
            </div>
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="" id="modal-content">
                    <div class="mySlides active">
                        <img id="full-image" src="" style="width:100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('inc/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="js/jquery.background-video.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        $(function(){
            $grid = $('.grid').masonry({
              // options
              itemSelector: '.grid-item',
              columnWidth: 190,
              gutter: 10,
              isAnimated: !Modernizr.csstransitions,
            });

            function onLayout() {
              console.log('layout done');
            }

            $grid.on('layoutComplete', onLayout);

        });

    </script>
    <script>
        function openModal() {
            $("#myModal").fadeIn();
          //document.getElementById('myModal').style.display = "block";
        }

        function closeModal() {
          $("#myModal").fadeOut();
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          $("#modal").height($(window.top).height() - window.scrollHeight);

          var image = $("#grid-item-image-" + n).attr("src");
          var full = $("#full-image").attr("src", image);
          full.css({'width': 'auto', 'max-height': ($(window).height() - 200)+'px'});


          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }

          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
  </body>
</html>