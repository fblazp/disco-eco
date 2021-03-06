<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>discoteca móvil Disco Eco - Contacta con nosotros</title>
    <meta name="description" content="Si tienes alguna duda o consulta, ponte en contacto con nosotros"/>
    <link rel="icon" href="favicon.ico">
    <!--Normalize-->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Fredoka+One|Permanent+Marker' rel='stylesheet' type='text/css'>
    <!--Fonts awesome-->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!--Estilos-->
    <link rel="stylesheet" href="css/main.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--HEADER-->
    <header id="header">
        <!--menú de navegación-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navIndex">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button><!--.navbar-toggle-->
            <a href="#" class="navbar-brand visible-xs">Menú</a><!--.navbar-brand-->
          </div><!--.navbar-header-->
          <div class="collapse navbar-collapse navIndex">
            <ul class="nav navbar-nav">
              <li><a href="equipos">Equipo y Montaje</a></li>
              <li><a href="agua">Agua Party</a></li>
              <li><a href="contacto">Contacto</a></li>
            </ul><!--.nav-->
            <div class="pull-right socials">
              <p>
                <a href="https://es-es.facebook.com/radioeco.avila/" target="_blank" class="facebook" title="Facebook"><i class="fa fa-facebook-official"></i></a>
                <a href="http://twitter.com/discoeco" target="_blank" class="twitter" title="twitter"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/eventos_eco_movil/" target="_blank" class="instagram" title="Instagram"><i class="fa fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCLUwyiVCx00888PRDmE637g" class="youtube" target="_blank" title="youtube"><i class="fa fa-youtube-play"></i></a>
              </p>
            </div>
          </div><!--.collapse-->
        </div><!--.container-->
      </nav><!--.navbar-->
      <!--logo y telefono-->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-3 col-sm-offset-1">
                <a href="index" title="inicio"><img class="img-responsive logo" src="img/logo_retDisplay.png" alt="discoteca móvil Disco Eco"></a>
              </div><!--.col-sm-5-->
              <div class="col-sm-4 col-sm-offset-4 hidden-xs">
                <h2 class="optimize pull-right"><i class="fa fa-phone-square"></i>920 365 230</h2>
              </div><!--.col-sm-5--> 
            </div><!--.row-->
          </div><!--col-sm-12-->
        </div><!--.row-->
      </div><!--.container-->
      <div class="espacio-sup"></div>
    </header><!--#header-->
    <!--END HEADER-->
    <!--EQUIPOS-->
    <section id="contacto" class="wrap back-cold">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <h2 class="fredokaFont">Contacta con nosotros</h2>
              <p>Si tienes alguna duda o quieres mas información sobre Disco Eco ponte en contacto con nosotros y te informaremos sin compromiso.</p>
            </div><!--.col-sm-10-->
          </div><!--.row-->
          <div class="row espacio-sup">
            <div class="col-md-4 text-center">
              <p class="lead"><i class="fa fa-envelope"></i> info@discoeco.es</p>
            </div><!--.col-md-4-->
            <div class="col-md-4 text-center">
              <p class="lead"><i class="fa fa-mobile fa-lg"></i> 649 645 835</p>
            </div><!--.col-md-4-->
            <div class="col-md-4 text-center">
              <p class="lead"><i class="fa fa-phone fa-lg"></i> 920 365 230</p>
            </div><!--.col-md-4-->
          </div><!--.row-->
        </div><!--.container-->
      </section><!--#contacto-->
      <section id="form_map" class="back-white">
        <div class="container">
          <div class="row wrap">
                <div class="col-sm-8 col-sm-offset-2">
                  <?php 
              if(isset($_POST['mail'])){
            $headers = $_POST['name'];
            $email_to = "info@discoeco.es";
            $email_subject  = "Consulta Disco Eco";

            if(!isset($_POST['name']) ||
            !isset($_POST['mail']) ||
            !isset($_POST['telefono']) ||
            !isset($_POST['evento']) ||
            !isset($_POST['consulta'])) {

            print_r('<div class="alert alert-danger" role="alert"><p><strong>Error</strong>. Ha habido un problema al enviar el formulario. <a href="contacto">Reintentar</a></p></div>');
            
            die();
            }

            $email_message = "Detalles del formulario de contacto:\n\n";
            $email_message .= "Nombre: " . $_POST['name'] . "\n";
            $email_message .= "E-mail: " . $_POST['mail'] . "\n";
            $email_message .= "Tipo de evento: " . $_POST['evento'] . "\n";
            $email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
            $email_message .= "Comentarios: " . $_POST['consulta'] . "\n\n";


            // Ahora se envía el e-mail usando la función mail() de PHP
            $headers = 'From: '.$email_from."\r\n".
            'Reply-To: '.$email_from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            @mail($email_to, $email_subject, $email_message, $headers);

            print_r('<div class="alert alert-success" role="alert"><strong>¡Muchas gracias!</strong>. El mensaje ha sido enviado, pronto nos pondremos en contacto contigo</div>');
            print_r('<div class="col-sm-12 text-center"><p class="lead"><a href="index">Volver al inicio</a></p></div>');
          
          }
            ?>
                </div><!--.col-sm-12-->
              </div><!--.row-->
          <div class="row wrap">
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                  <h3 class="markerFont text-center">¿Qué evento buscas?</h3>
                  <div class="espacio-sup">
                    <p>Dinos que tipo de evento quieres y enseguida nos pondremos en contacto contigo para ofrecerte la mejor solución.</p>
                  </div><!--.espacio-sup-->
                  <div class="espacio-sup">
                    <form action="contacto" method="post">
                      <div class="form-group">
                        <label for="name">Tu nombre</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" />
                      </div><!--.form-group-->
                      <div class="form-group">
                        <label for="mail">Tu email</label>
                        <input type="email" class="form-control" id="mail" name="mail" placeholder="Correo electrónico">
                      </div><!--.form-group-->
                      <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono de contacto">
                      </div><!--.form-group-->
                      <div class="form-group">
                        <label for="selector">Tipo de evento</label>
                        <select class="form-control" name="evento" id="selector">
                        <option>Discoteca móvil</option>
                        <option>Agua Party</option>
                        <option>Proyección cine</option>
                        <option>Karaoke</option>
                        <option>Otros</option>
                      </select>
                      </div><!--.form-group-->
                      <div class="form-group">
                        <label for="texto">Tu consulta</label>
                        <textarea class="form-control" name="consulta" id="texto" rows="3"></textarea>
                      </div><!--.form-group-->
                      <div class="form-group pull-right">
                        <!--<button type="submit" class="btn btn-primary">Enviar</button>-->
                        <button type="submit" id="sendButton" data-loading-text="Enviando..." class="btn btn-primary" autocomplete="off">
                          Enviar
                        </button>
                      </div><!--.form-group-->
                    </form>
                  </div><!--.espacio-sup-->
                </div><!--.col-sm-10-->
              </div><!--.row-->
            </div><!--.col-sm-6-->
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                  <h3 class="markerFont text-center">¿Dónde estamos?</h3>
                  <div class="espacio-sup"></div>
                  <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d474.46421820918073!2d-5.325234263756971!3d40.66419458522291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d40.6641908!2d-5.3252872!5e0!3m2!1ses!2ses!4v1455019442028" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe><!--.embed-responsive-->
              </div><!--.embed-responsive-->
                </div><!--.col-sm-10-->
              </div><!--.row-->
            </div><!--.col-sm-6-->
          </div><!--.row-->
        </div><!--.container-->
    </section><!--#form-map-->
    <!-- END EQUIPOS-->
    <!--FOOTER-->
    <footer id="footer" class="espacio-sup">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <h4>LO TENEMOS TODO PARA TU EVENTO</h4>
            <ul>
              <li>Discoteca Móvil</li>
              <li>Fiesta del agua</li>
              <li>Proyección de cine</li>
              <li>Fiesta color</li>
              <li>Karaoke</li>
              <li>Pantalla gigante</li>
            </ul>
          </div><!--.col-sm-5-->
          <div class="col-sm-2 col-sm-offset-5 espacio-sup">
            <p class="small">Hosting by:</p>
            <a href="http://www.webfaction.com/services/hosting?aid=92987" target="_blank" title="Ir a webfaction.com"><img src="https://www.webfaction.com/local_media/images/banners/webfaction-110x40-white-logo-bg.png" alt="Página alojada en Webfaction.com"></a>
          </div><!--.col-sm-2-->
        </div><!--.row-->
        <div class="espacio-sup"></div>
        <div class="row">
          <div class="col-sm-7">
            <p>Eventos Eco Móvil 2017 | Travesía de la Plaza | 05151 Diego Álvaro (Ávila) | info@discoeco.es</p>
          </div><!--.col-sm-7-->
          <div class="col-sm-5">
            <p class="pull-right">
              <a href="cookies">Política de cookies</a> | 
              <a href="http://www.agpd.es/portalwebAGPD/canaldocumentacion/publicaciones/common/Guias/Guia_Cookies.pdf" target="_blank">Política de privacidad</a>
            </p><!--.pull-right-->
          </div><!--.col-sm-5-->
        </div><!--.row-->
      </div><!--.container-->
      <!--boton ir arriba-->
      <a class="go-top" href="#" title="Ir arriba"><i class="fa fa-chevron-up fa-3x"></i></a>
      <!--fin boton ir arriba-->
    </footer><!--#footer-->
    <!--END FOOTER-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!--scripts boton formulario-->
    <script>
      $('#sendButton').on('click', function () {
        var $btn = $(this).button('loading')
        // business logic...
        $btn.button('reset')
  })
</script>
<!--Analitycs-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73705464-1', 'auto');
  ga('send', 'pageview');

</script>
<!--script boton ir arriba-->
<script>
      $(document).ready(function() {
        // Show or hide the sticky footer button
        $(window).scroll(function() {
          if ($(this).scrollTop() > 320) {
            $('.go-top').fadeIn(200);
          } else {
            $('.go-top').fadeOut(200);
          }
        });
   
        // Animate the scroll to top
        $('.go-top').click(function(event) {
          event.preventDefault();
   
          $('html, body').animate({scrollTop: 0}, 300);
        })
      });
    </script>
  </body>
</html>