<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="El DIF Guadalajara proporciona asistencia social, así como espacios de Desarrollo Comunitarios enfocados a grupos de población específicos que requieren del desarrollo de habilidades para lograr el empoderamiento y autosuficiencia de los miembros de la comunidad, poniéndolos en contacto con herramientas y tecnologías innovadoras.">
    <link rel="shortcut icon" href="img/logoDIF.png">

    <title>Salud-DIFGDL</title>

    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/font-awesome-4.7.0/font-awesome.min.css" rel="stylesheet">
    <link href="css/dif-gdl.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>

  <body>

    <!-- Navigation -->
    <?php include ('navmenu.php'); ?>

    <!-- Page Content -->
    <div class="container">

      <h1 class="mt-5 mb-3">Salud y Bienestar
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="index.html">Servicios</a>
        </li>
        <li class="breadcrumb-item active">Salud</li>
      </ol>

    <!-- container -->
    <div class="container">
      <div class="row my-2">
          <div class="col-lg-12">
            <div class="image-servicios" style="background-image:url('img/contenido/salud.jpg');width:100%; height:300px; background-position:center;background-size: cover;"></div><div class='overlay-servicios'></div>
          </div>
      </div>

      <div class="row mx-lg-4 mx-md-1 my-4">
        <div class="col-12">
          <p class="xsmall-sm" align="justify">El departamento de Salud y Bienestar tiene por objeto fortalecer y difundir los programas del sistema en beneficio de las familias y sus comunidades en situación vulnerable, así como proporcionar asistencia médica y odontológica integral en el primer nivel de atención realizando un diagnóstico oportuno e informando a la población hacia un auto cuidado, detección oportuna y la práctica de la prevención. Además brinda apoyo psicológico a las personas sujetas de asistencia social en condiciones vulnerables a los sectores más desprotegidos de la comunidad tapatía, para la prevención, diagnóstico y tratamiento de problemas que impiden el desarrollo armónico de la familia y la sociedad</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="card mb-4">
            <div class="card-header">
              <center><b>¿Qué necesito?</b></center>
            </div>
            <div class="card-block mx-2 my-2">
              Para apertura de expediente:
              <ul>
                <li class="card-text">Identificación Oficial (Copia)
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="card mb-4">
            <div class="card-header">
              <center><b>¿Qué debo hacer?</b></center>
            </div>
            <div class="card-block mx-2 my-2">
              <ul>
                <li class="card-text">Marcar o acudir al centro de Salud DIF correspondiente para mayores informes
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-12">
          <h2 class="page-header">Áreas</h2>
          <hr>
        </div>
        <div class="col-md-4">
          <div class="media">
            <div class="pull-left">

            </div>
            <div class="media-body">
              <h4 class="media-heading">Dental</h4>
              <p>Brinda consulta odontológica, tratamientos preventivos, curativos y correctivos para aquellos pacientes que requieran de alguna intervención dental, con el propósito de mejorar su calidad de vida y prevenir la escalación de padecimientos bucales más avanzados.</p>
            </div>
          </div>
          <div class="media">
            <div class="pull-left">

            </div>
            <div class="media-body">
              <h4 class="media-heading">Laboratorio</h4>
              <p>Ofrece servicios de diagnóstico médico por medio de exámenes y análisis clínicos, biológicos, cerológicos, químicos, inmunológicos, bacterianos y hematológicos.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="media">
            <div class="pull-left">

            </div>
            <div class="media-body">
              <h4 class="media-heading">Médica</h4>
              <p>El área médica proporciona consultas generales a la población tapatía para el diagnóstico y atención de los padecimientos de salud que puedan presentarse en el día a día, con la mejor atención y los médicos preparados para atender a sus pacientes.</p>
            </div>
          </div>
          <div class="media">
            <div class="pull-left">

            </div>
            <div class="media-body">
              <h4 class="media-heading">Nutrición</h4>
              <p>El área de nutrición ofrece programas de ayuda alimentaria directa tanto en formas de consulta y asesoría a quien requiera guía para una mejor alimentación por medio de talleres, clases y educación nutricional, así como en forma física entregando despensas.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="media">
            <div class="pull-left">

            </div>
            <div class="media-body">
              <h4 class="media-heading">Psicología</h4>
              <p>El área de psicología tiene como objetivo apoyar a quienes sufran de trastornos psicológicos por medio de la prevención, detección temprana, diagnóstico, tratamiento y rehabilitación, para que los problemas psicológicos no impidan el desarrollo armónico e íntegro del paciente con su entorno familiar o social.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row my-4">
        <div class="col-12">
          <h2 class="page-header">Centros</h2>
        </div>
        <div class="col-12">
          <!-- Mapa -->
          <div class="card">
            <div class="card-header">
              <a class="nav-link" href="#" id="centros" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="fa fa-caret-square-o-down" aria-hidden="true"></i> <b>Salud</b>
              </a>
              <div class="dropdown-menu dropdown-menu-left" aria-labelledby="centros" style="overflow-y: scroll; max-height:400px;">
                <?php
                require_once('connection.php');
                $query = "SELECT label,nombre,latitud,longitud,direccion,colonia,telefono FROM centro, marcadores WHERE centro.centroID = marcadores.centroID AND marcadores.seccion = 'salud';";
                $response = @mysqli_query($dbc, $query);
                if($response){
                  while($row = mysqli_fetch_array($response)){
                    echo '<a class="dropdown-item" id="centro'.$row['label'].'" href="javascript:;" onclick="centro()">'.$row['nombre'].'</a>';
                  }
                }
                else {
                  echo "Couldn't issue database query<br />";
                  echo mysqli_error($dbc);
                }
                ?>
              </div>
            </div>
            <div class="card-block">
              <ul class="list-group list-group-flush">
                <div id="map" class="list-group-item"></div>
                <div id="actividades" class="list-group-item">

                </div>
                <div class="card-footer text-muted">
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-12">
          <h2 class="page-header">Fototeca</h2>
          <hr>
        </div>
        <div class="col-12">
          <div id="flickrembed_64"></div>
          <script src='https://flickrembed.com/embed_v2.js.rand.php?container=flickrembed_64&source=flickr&layout=responsive&input=www.flickr.com/photos/139053533@N02/albums/72157693270854161&sort=0&by=album&theme=carousel&scale=fit&limit=10&skin=default-light&autoplay=true'></script>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Javascript -->
    <script>
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: {lat: 20.685930, lng: -103.381067},
        mapTypeControl: false
      });
      <?php
      $query = "SELECT label,nombre,latitud,longitud,direccion,colonia,telefono FROM centro, marcadores WHERE centro.centroID = marcadores.centroID AND marcadores.seccion = 'salud';";
      $response = @mysqli_query($dbc, $query);
      if($response){
        while($row = mysqli_fetch_array($response)){
          echo '
          var marker'.$row['label'].' = new google.maps.Marker({
            map: map,
            label: \''.$row['label'].'\',
            position: {lat: '.$row['latitud'].', lng: '.$row['longitud'].'},
          });
          $(document).ready(function() {
            $("#centro'.$row['label'].'").click(function(){
                var center = new google.maps.LatLng('.$row['latitud'].','.$row['longitud'].');
                map.panTo(center);
                map.setZoom(15);
                infowindow'.$row['label'].'.open(map, marker'.$row['label'].');
                centro'.$row['label'].'();
            });
          });
          var contentString'.$row['label'].' = \'<div id="content" style="font-family:Exo;">\'+
                    \'<div id="siteNotice">\'+
                    \'</div>\'+
                    \'<h6 id="firstHeading" class="firstHeading" style="color:#1fcfcb;"><b>'.$row['nombre'].'</b></h6>\'+
                    \'<div id="bodyContent">\'+
                    \'<p>'.$row['direccion'].'\'+
                    \'<br>Col. '.$row['colonia'].'\'+
                    \'<br>Tel. '.$row['telefono'].'</p>\'+
                    \'</div></div>\';
          var infowindow'.$row['label'].' = new google.maps.InfoWindow({
            content: contentString'.$row['label'].',
            maxWidth: 200
          });
          marker'.$row['label'].'.addListener(\'click\', function() {
            infowindow'.$row['label'].'.open(map, marker'.$row['label'].');
          });
          ';
        }
      }
      else {
        echo "Couldn't issue database query<br />";
        echo mysqli_error($dbc);
      }
      ?>
    }
    </script>

    </div>
    <!-- /.pagecontent -->

    <!-- Footer -->
    <?php include ('footer.php'); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Google Maps Events -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjuwDhjrAy-i2Al6Hb-7ey3GQmuQatc18&callback=initMap"></script>

  </body>

</html>
