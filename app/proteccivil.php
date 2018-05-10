<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="El DIF Guadalajara proporciona asistencia social, así como espacios de Desarrollo Comunitarios enfocados a grupos de población específicos que requieren del desarrollo de habilidades para lograr el empoderamiento y autosuficiencia de los miembros de la comunidad, poniéndolos en contacto con herramientas y tecnologías innovadoras.">
    <link rel="shortcut icon" href="img/logoDIF.png">

    <title>ProteccionCivil-DIFGDL</title>

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

      <h1 class="mt-5 mb-3">Unidad de Protección Civil
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="index.html">Servicios</a>
        </li>
        <li class="breadcrumb-item active">Protección Civil</li>
      </ol>

    <!-- container -->
    <div class="container">
      <div class="row my-2">
          <div class="col-lg-12">
            <div class="image-servicios" style="background-image:url('img/contenido/proteccivil.jpg');width:100%; height:300px; background-position:center;background-size: cover;"></div><div class='overlay-servicios'></div>
          </div>
      </div>

      <div class="row mx-lg-4 mx-md-1 my-4">
        <div class="col-12">
          <p class="xsmall-sm" align="justify">La Unidad de Protección Civil es el órgano normativo y operativo responsable de desarrollar y dirigir las acciones de protección civil, así como elaborar, actualizar, operar y vigilar el Programa Interno de Protección Civil en los bienes inmuebles e instalaciones fijas y móviles del Sistema DIF Guadalajara a los sectores públicos, y sociales.</p>
          <p class="xsmall-sm" align="justify">Gracias al apoyo de la Dirección de Protección Civil y Bomberos del municipio de Guadalajara, el personal de este Sistema se capacita en cuatro brigadas: Evacuación, Primeros Auxilios y Búsqueda y Rescate, así como Prevención, Control y Combate de Incendios, encabezados por un jefe de brigada y suplente.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header">
              <center><b>Teléfonos de Emergencia</b></center>
            </div>
            <div class="card-block mx-2 my-2">
              <ul>
                <li class="card-text">Unidad de Protección Civil DIF Guadalajara:
                  <ul>
                    <li class="card-text">3848-5000</li>
                  </ul>
                </li>
                <li class="card-text">Atención Ciudadana
                  <ul>
                    <li class="card-text">070</li>
                  </ul>
                </li>
                <li class="card-text">Cruz Verde
                  <ul>
                    <li class="card-text">1201-7222</li>
                  </ul>
                </li>
                <li class="card-text">Emergencias
                  <ul>
                    <li class="card-text">911</li>
                  </ul>
                </li>
              </ul>
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
                <i class="fa fa-caret-square-o-down" aria-hidden="true"></i> <b>Unidad de Protección Civil</b>
              </a>
              <div class="dropdown-menu dropdown-menu-left" aria-labelledby="centros" style="overflow-y: scroll; max-height:400px;">
                <?php
                require_once('connection.php');
                $query = "SELECT label,nombre,latitud,longitud,direccion,colonia,telefono FROM centro, marcadores WHERE centro.centroID = marcadores.centroID AND marcadores.seccion = 'proteccivil';";
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
          <script src='https://flickrembed.com/embed_v2.js.rand.php?container=flickrembed_64&source=flickr&layout=responsive&input=www.flickr.com/photos/139053533@N02/albums/72157668197288638&sort=0&by=album&theme=carousel&scale=fit&limit=10&skin=default-light&autoplay=true'></script>
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
      $query = "SELECT label,nombre,latitud,longitud,direccion,colonia,telefono FROM centro, marcadores WHERE centro.centroID = marcadores.centroID AND marcadores.seccion = 'proteccivil';";
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
