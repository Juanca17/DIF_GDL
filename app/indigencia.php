<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="El DIF Guadalajara proporciona asistencia social, así como espacios de Desarrollo Comunitarios enfocados a grupos de población específicos que requieren del desarrollo de habilidades para lograr el empoderamiento y autosuficiencia de los miembros de la comunidad, poniéndolos en contacto con herramientas y tecnologías innovadoras.">
    <link rel="shortcut icon" href="img/logoDIF.png">

    <title>AtencionIndigencia-DIFGDL</title>

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

      <h1 class="mt-5 mb-3">Personas en Situación de Indigencia
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="index.html">Programas</a>
        </li>
        <li class="breadcrumb-item active">Personas en Situación de Indigencia</li>
      </ol>

    <!-- container -->
    <div class="container">
      <div class="row my-2">
          <div class="col-lg-12">
            <div class="image-servicios" style="background-image:url('img/contenido/indigencia.jpg');width:100%; height:300px; background-position:center;background-size: cover;"></div><div class='overlay-servicios'></div>
          </div>
      </div>

      <div class="row mx-lg-4 mx-md-1 my-4">
        <div class="col-12">
          <p class="xsmall-sm" align="justify">Este programa tiene como objetivo brindar servicios, apoyos y atención especializada a personas que ejercen actividades de subsistencia en calles, así como devolver la dignidad humana, restituir los derechos, recuperar la visibilidad social y la reinserción laboral a través de acciones integrales de sociedad y gobierno. Se implementaron de manera permanente las brigadas nocturnas que recorren las calles de la ciudad para invitar a pasar la noche en los albergues disponibles. Todo esto en colaboración con Asociaciones Civiles y Ayuntamiento de Guadalajara</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header">
              <center><b>Población Objetivo</b></center>
            </div>
            <div class="card-block mx-2 my-2">
              Perfil de Ingreso:
              <ul>
                <li class="card-text">Mayores de 18 años y menores acompañados de padre y/o madre.
                </li>
                <li class="card-text">No alcoholizados.
                </li>
                <li class="card-text">No drogados.
                </li>
                <li class="card-text">No psiquiátricos.
                </li>
                <li class="card-text">Que requieran el apoyo temporal.
                </li>
                <li class="card-text">Que no cuenten con redes de apoyo familiar.
                </li>
                <li class="card-text">Que no perciban un ingreso.
                </li>
                <li class="card-text">Que se encuentre en condiciones económicas, sociales y familiares que lo situé en condición de vulnerabilidad.
                </li>
                <li class="card-text">Que busquen una oportunidad de superarse.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-12">
          <h2 class="page-header">Programa para Personas en Situación de Indigencia</h2>
          <hr>
        </div>
        <div class="col-12 col-lg-6">
          <div class="media">
            <div class="pull-left">

            </div>
            <div class="media-body">
              <h4 class="media-heading">Brigadas</h4>
              <p align="justify">Este programa busca invitar a las personas a que pasen la noche en un espacio digno y tengan cubiertas su necesidades básicas. Se trabaja en conjunto con la Coordinación de Desarrollo Económico y Combate a la Desigualad, la Comisaría de la Policía Preventiva que brinda protección a los brigadistas, su Unidad de Psicología de Intervención Primaria que hace el primer contacto, y Servicios Médicos Municipales, que brindan apoyo a las personas con problemas de drogas y alcohol, en tránsito, o con trastornos psiquiátricos.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="media">
            <div class="pull-left">

            </div>
            <div class="media-body">
              <h4 class="media-heading">CADIPSI</h4>
              <p align="justify">El Centro de Atención y Desarrollo Integral para Personas en Situación de Indigencia busca atender e integrar a la sociedad a personas en situación de indigencia que pernoctan en la vía pública procurando la inserción a su medio familiar, laboral y/o social</p>
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
                <i class="fa fa-caret-square-o-down" aria-hidden="true"></i> <b>Personas en Situación de Indigencia</b>
              </a>
              <div class="dropdown-menu dropdown-menu-left" aria-labelledby="centros" style="overflow-y: scroll; max-height:400px;">
                <?php
                require_once('connection.php');
                $query = "SELECT label,nombre,latitud,longitud,direccion,colonia,telefono FROM centro, marcadores WHERE centro.centroID = marcadores.centroID AND marcadores.seccion = 'indigencia';";
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
          <script src='https://flickrembed.com/embed_v2.js.rand.php?container=flickrembed_64&source=flickr&layout=responsive&input=www.flickr.com/photos/139053533@N02/albums/72157689313924410&sort=0&by=album&theme=carousel&scale=fit&limit=10&skin=default-light&autoplay=true'></script>
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
      $query = "SELECT label,nombre,latitud,longitud,direccion,colonia,telefono FROM centro, marcadores WHERE centro.centroID = marcadores.centroID AND marcadores.seccion = 'indigencia';";
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
