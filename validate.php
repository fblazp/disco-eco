<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>discoteca móvil Disco Eco - Ponemos ritmo a tus fiestas</title>
    <meta name="description" content="Fiestas para ayuntamientos, asociaciones, fiestas privadas, karaoke, pantalla gigante y mucho más..."/>
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
              <li><a href="equipos.html">Equipo y Montaje</a></li>
              <li><a href="agua.html">Agua Party 2016</a></li>
              <li><a href="contacto.php">Contacto</a></li>
            </ul><!--.nav-->
            <div class="pull-right socials">
              <p>
                <a href="https://es-es.facebook.com/radioeco.avila/" target="_blank" class="facebook" title="Facebook"><i class="fa fa-facebook-official"></i></a>
                <a href="http://twitter.com/discoeco" target="_blank" class="twitter" title="twitter"><i class="fa fa-twitter"></i></a>
                <a href="http://instagram.com/discoecomovil" target="_blank" class="instagram" title="Instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="youtube" title="youtube"><i class="fa fa-youtube-play"></i></a>
              </p>
            </div>
          </div><!--.collapse-->
        </div><!--.container-->
      </nav><!--.navbar-->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-3 col-sm-offset-1">
                <a href="index.html"><img class="img-responsive logo" src="img/logo_retDisplay.png" alt="discoteca móvil Disco Eco"></a>
              </div><!--.col-sm-5-->
              <div class="col-sm-4 col-sm-offset-4 hidden-xs">
                <h2 class="optimize pull-right"><i class="fa fa-phone-square"></i>920 365 230</h2>
              </div><!--.col-sm-5--> 
            </div><!--.row-->
          </div><!--col-sm-12-->
        </div><!--.row-->
      </div><!--.container-->
    </header><!--#header-->
    <div class="clearfix"></div>
    <!--FIN HEADER-->
    <section id="validar" class="wrap">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-12">
            <?php 
              if(isset($_POST['mail'])){
            $headers = $_POST['name'];
            $email_to = "fblazp@gmail.com";
            $email_subject  = "Consulta Disco Eco";

            if(!isset($_POST['name']) ||
            !isset($_POST['mail']) ||
            !isset($_POST['telefono']) ||
            !isset($_POST['evento']) ||
            !isset($_POST['consulta'])) {

            print_r('<div class="alert alert-danger" role="alert"><strong>Error</strong>. Ha habido un problema al enviar el formulario</div>');
            
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

            print_r('<div class="alert alert-success" role="alert"><strong>¡Muchas gracias!</strong>. El mensaje ha sido enviado</div>');
          
          }
            ?>
          </div><!--.col-sm-12-->
        </div><!--.row-->
      </div><!--.container-->
    </section><!--#validar-->
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
          </div>
        </div>
        <div class="espacio-sup"></div>
        <div class="row">
          <div class="col-sm-7">
            <p>Eventos Eco Móvil 2016 | Travesía de la Plaza | 05151 Diego Álvaro (Ávila) | radioeco@hotmail.com</p>
          </div><!--.col-sm-7-->
          <div class="col-sm-5">
            <p class="pull-right">
              <a href="cookies.html">Política de cookies</a> | 
              <a href="http://www.agpd.es/portalwebAGPD/canaldocumentacion/publicaciones/common/Guias/Guia_Cookies.pdf" target="_blank">Política de privacidad</a>
            </p><!--.pull-right-->
          </div><!--.col-sm-5-->
        </div><!--.row-->
      </div><!--.container-->
    </footer><!--#footer-->
    <!--END FOOTER-->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>