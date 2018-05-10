<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="El DIF Guadalajara proporciona asistencia social, así como espacios de Desarrollo Comunitarios enfocados a grupos de población específicos que requieren del desarrollo de habilidades para lograr el empoderamiento y autosuficiencia de los miembros de la comunidad, poniéndolos en contacto con herramientas y tecnologías innovadoras.">
    <link rel="shortcut icon" href="img/logoDIF.png">

    <title>TrabajoSocial-DIFGDL</title>

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

      <h1 class="mt-5 mb-3">Trabajo Social
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="index.html">Servicios</a>
        </li>
        <li class="breadcrumb-item active">Trabajo Social</li>
      </ol>

    <!-- container -->
    <div class="container">
      <div class="row my-2">
          <div class="col-lg-12">
            <div class="image-servicios" style="background-image:url('img/contenido/trabajosocial2.jpg');width:100%; height:300px; background-position:center;background-size: cover;"></div><div class='overlay-servicios'></div>
          </div>
      </div>

      <div class="row mx-lg-4 mx-md-1 my-4">
        <div class="col-12">
          <p class="xsmall-sm" align="justify">El departamento de Trabajo Social busca proporcionar atención integral a las familias que viven en condiciones de vulnerabilidad a causa de la insuficiencia de recursos económicos, de su situación y contexto. Este programa otorga herramientas a la cabezas de familia para poder cubrir de forma satisfactoria sus necesidades básicas y las de su familia. Participa en la integración, implantación, coordinación y operación del programa municipal de asistencia social en sus estrategias generales, estrategias específicas y líneas de acción dirigidas a los grupos vulnerables de la población del Municipio de Guadalajara. Promueve y coordina proyectos de intervención autorizados por el superior jerárquico, tendientes a mejorar las condiciones de vida de la población objetivo.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="card mb-4">
            <div class="card-header">
              <center><b>¿Qué necesito?</b></center>
            </div>
            <div class="card-block mx-2 my-2">
              <ul>
                <li class="card-text">Identificación Oficial
                </li>
                <li class="card-text">Comprobante de Domicilio
                </li>
              </ul>
              La documentación extra varía dependiendo del tipo de atención solicitada.
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="card mb-4">
            <div class="card-header">
              <center><b>¿Qué debo hacer?</b></center>
            </div>
            <div class="card-block mx-2 my-2">
              <ul>
                <li class="card-text">Acude al CDC más cercano o a las oficinas generales, busca la oficina de Trabajo Social para la realización de una entrevista.
                </li>
              </ul><br class="hidden-lg-down">
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-12">
          <h2 class="page-header">Áreas</h2>
          <hr>
        </div>
        <div class="col-12 col-lg-6">
          <div class="media">
            <div class="pull-left">

            </div>
            <div class="media-body">
              <h4 class="media-heading">Ventanilla Única</h4>
              <p align="justify">Esta área proporciona asesoría, capacitación y/o derivación a un área más específica para la solución de la problemática que presente la persona en situación vulnerable. (Esta ventanilla está ubicada únicamente en las oficinas generales del DIF Guadalajara).</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="media">
            <div class="pull-left">

            </div>
            <div class="media-body">
              <h4 class="media-heading">Casos urgentes</h4>
              <p align="justify">Se busca brindar atención inmediata a casos que atentan contra la vida o la integridad, física, mental y/o emocional de la persona que acuda por apoyo y atención.</p>
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
                <i class="fa fa-caret-square-o-down" aria-hidden="true"></i> <b>Trabajo Social</b>
              </a>
              <div class="dropdown-menu dropdown-menu-left" aria-labelledby="centros" style="overflow-y: scroll; max-height:400px;">
                <?php
                require_once('connection.php');
                $query = "SELECT label,nombre,latitud,longitud,direccion,colonia,telefono FROM centro, marcadores WHERE centro.centroID = marcadores.centroID AND marcadores.seccion = 'trabajosocial';";
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
          <script src='https://flickrembed.com/embed_v2.js.rand.php?container=flickrembed_64&source=flickr&layout=responsive&input=www.flickr.com/photos/139053533@N02/albums/72157667239839398&sort=0&by=album&theme=carousel&scale=fit&limit=10&skin=default-light&autoplay=true'></script>
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
      $query = "SELECT label,nombre,latitud,longitud,direccion,colonia,telefono FROM centro, marcadores WHERE centro.centroID = marcadores.centroID AND marcadores.seccion = 'trabajosocial';";
      $response = @mysqli_query($dbc, $query);
      if($response){
        while($row = mysqli_fetch_array($response)){
          echo '
          var marker'.$row['label'].' = new google.maps.Marker({
            map: map,
            label: \''.$row['label'].'\',
            position: {lat: '.$row['latitud'].', lng: '.$row['longitud'].'}
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
