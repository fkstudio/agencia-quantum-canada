<!doctype html>
<html lang="en">
  <head>
    <title>Contacto | Quantum Agencia de Publicidad</title>
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
            <source src="images/videos/contacto.m4v">
            <source src="images/videos/webm/contacto.webm" type="video/webm">
            <source src="images/videos/ogv/contacto.ogv" type="video/ogv">
        </video>
    </div>
    <div id="container" class="container-fluid fade-out">
        <div class="row">
            <?php include('inc/social.php') ?>
            <?php include("inc/navbar.php"); ?>
            <div class="col-lg-10 col-md-9 col-sm-12">
                <div class="col-md-10 about-bg">
                    <div class="col-md-5 contact-content">
                        <h3 class="primary-title">Contáctanos!</h3>
                        <h4 style="text-align: left;padding-left: 0px;" class="primary-title"> <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:info@quantum-canada.com">info@quantum-canada.com</a></h4>
                        <h4 style="text-align: left;padding-left: 0px;" class="primary-title"> <span class="glyphicon glyphicon-phone"></span> + 1.809.472.5566</h4>
                        <br/>
                        <h4 class="primary-title"><span class="glyphicon glyphicon-map-marker"></span> Santo Domingo, Rep. Dom.</h4>
                        <p>Av. Winston Churchill esquina Roberto Pastoriza
                        Plaza Las Américas I, Local 3, Santo Domingo,<br>Distrito Nacional, Rep. Dom.</p>
                        <br/>
                        <h4 class="primary-title"><span class="glyphicon glyphicon-send"></span> Redes sociales</h4>
                        <div class="col-lg-2 col-md-4 col-sm-2 col-xs-2">
                            <a target="_blacnk" href="https://www.facebook.com/quantumcanada/">
                                <img src="images/facebook.png" class="img-responsive" />
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-2 col-xs-2">
                            <a target="_blacnk" href="https://www.instagram.com/quantumagencia/">
                                <img src="images/instagram.png" class="img-responsive" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="clearfix"></div>
                        <br/>
                        <form method="" class="contact-form">
                            <div class="form-group">
                                <label class="col-md-3">Nombre</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br/>
                            <div class="form-group">
                                <label class="col-md-3">Apellido</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br/>
                            <div class="form-group">
                                <label class="col-md-3">Correo</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br/>
                            <div class="form-group">
                                <label class="col-md-3">A qué industria o sector pertenece?</label>
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option value="" selected="">-- seleccionar --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br/>
                            <div class="form-group">
                                <label class="col-md-3">Servicios que le interesan?</label>
                                <div class="col-md-9 checkbox-content">
                                    <input type="checkbox"  /> Creatividad <br/>
                                    <input type="checkbox"  /> Desarrollo de Campañas <br/>
                                    <input type="checkbox"  /> Estrategias de Marketing <br/>
                                    <input type="checkbox"  /> Branding <br/>
                                    <input type="checkbox"  /> Fotografía Comercial <br/>
                                    <input type="checkbox"  /> Diseño <br/>
                                    <input type="checkbox"  /> Media Planning (TV, radio, digital, exterior, print) <br/>
                                    <input type="checkbox"  /> Promocionales <br/>
                                    <input type="checkbox"  /> Otros <br/>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br/>
                            <div class="form-group">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-default btn-block">Enviar</button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br/>
                        </form>    
                    </div>
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