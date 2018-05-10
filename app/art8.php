<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="El DIF Guadalajara proporciona asistencia social, así como espacios de Desarrollo Comunitarios enfocados a grupos de población específicos que requieren del desarrollo de habilidades para lograr el empoderamiento y autosuficiencia de los miembros de la comunidad, poniéndolos en contacto con herramientas y tecnologías innovadoras.">
    <link rel="shortcut icon" href="img/logoDIF.png">

    <title>Articulo8-DIFGDL</title>

    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/font-awesome-4.7.0/font-awesome.min.css" rel="stylesheet">
    <link href="css/dif-gdl.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>

    <!-- Navigation -->
    <?php include ('navmenu.php'); ?>

    <!-- Intro -->
    <div class="container">

      <h1 class="mt-5 mb-3">Artículo 8
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item"><a href="transparencia.php">Transparencia</li></a>
        <li class="breadcrumb-item active">Artículo 8</li>
      </ol>

      <center>
      <p class="my-5"><b><i>"La información aquí presentada es fundamental y obligatoria para todos los sujetos obligados"</b></i></p>
      <a href="http://difgdl.gob.mx/www/images/transparencia/AVISO_DE_CONFIDENCIALIDAD.pdf" target="_blank" class="btn btn-info mb-5">
        Aviso de<br>Confidencialidad</a>
      </center>
    </div>

    <!-- Container Principal -->
    <div class="container" width="80%" accept-charset="utf-8">
      <div class="row">
        <div class="col-lg-12">

          <!-- Accordion Principal -->
          <div class="mb-5" id="accordion" role="tablist" aria-multiselectable="true">
            <?php
            require_once('connection.php');

            // Query fracciones
            $query = "SELECT fraccionID, descripcion, href, tipo FROM fraccion";
            $response = @mysqli_query($dbc, $query);
            if($response){
              while($row = mysqli_fetch_array($response)){
                if($row['tipo'] == 'file') {
                  // Fraccion con file
                  echo '
                  <div class="card">
                    <div class="card-header bg-azul" role="tab">
                      <div class="row">
                        <div class="col-10 col-lg-11">
                          <h5 class="mb-0 text-white small-sm">
                            '.$row['descripcion'].'
                          </h5>
                        </div>
                        <div class="col-2 col-lg-1">
                          <a href="'.$row['href'].'" target="_blank"onMouseOver="this.style.cssText=\'color: #cc0000\'"onMouseOut="this.style.cssText=\'color: #fff\'"style="color:white;">
                            <i class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>';
                }
                else {
                  // Query incisos
                  $query2 = 'SELECT fraccionID, incisoID, inciso.href AS incisoHref, inciso.descripcion AS incisoDesc, inciso.tipo AS incisoTipo FROM fraccion, inciso WHERE inciso.fraccionNUM = fraccion.fraccionNUM AND fraccionID = "'.$row['fraccionID'].'";';
                  $response2 = @mysqli_query($dbc, $query2);
                  // Fraccion con dropdown
                  echo '
                  <div class="card">
                    <div class="card-header bg-azul" role="tab">
                      <div class="row">
                        <div class="col-10 col-lg-11">
                          <h5 class="mb-0 text-white small-sm">
                              '.$row['descripcion'].'
                          </h5>
                        </div>
                        <div class="col-2 col-lg-1">
                          <a href="#'.$row['fraccionID'].'" class="collapsed text-white" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapse">
                          <i class="fa fa-chevron-down fa-lg" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div id="'.$row['fraccionID'].'" class="collapse" role="tabpanel" aria-labelledby="innerheading">
                      <div class="card-block text-dark">
                        <div id="inneraccordion" role="tablist" aria-multiselectable="true" class="mx-3 my-3">';
                  while($row2 = mysqli_fetch_array($response2)){
                    if($row2['incisoTipo'] == 'file') {
                      // Inciso con file
                      echo '
                      <div class="card">
                        <div class="card-header" role="tab">
                          <div class="row">
                            <div class="col-10 col-lg-11">
                              <h5 class="mb-0 small-sm">
                                '.$row2['incisoDesc'].'
                              </h5>
                            </div>
                            <div class="col-2 col-lg-1">
                              <a href="'.$row2['incisoHref'].'" target="_blank"onMouseOver="this.style.cssText=\'color: #cc0000\'"onMouseOut="this.style.cssText=\'color: #000000\'"style="color:black;">
                                <i class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      ';
                    }
                    elseif($row2['incisoTipo'] == 'window') {
                      // Inciso con window
                      echo '
                      <div class="card">
                        <div class="card-header" role="tab">
                          <div class="row">
                            <div class="col-10 col-lg-11">
                              <h5 class="mb-0 small-sm">
                                '.$row2['incisoDesc'].'
                              </h5>
                            </div>
                            <div class="col-2 col-lg-1">
                              <a href="'.$row2['incisoHref'].'" target="_blank"onMouseOver="this.style.cssText=\'color: 	#3383FF\'"onMouseOut="this.style.cssText=\'color: #000000\'"style="color:black;"">
                                <i class="fa fa-window-maximize fa-lg" aria-hidden="true"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      ';
                    }
                    elseif($row2['incisoTipo'] == 'multi-1') {
                      // Query documentos
                      $query3 = 'SELECT perteneceID, descripcion AS docDesc, href, tipo, orden FROM documento WHERE perteneceID = "'.$row2['incisoID'].'" ORDER BY orden;';
                      $response3 = @mysqli_query($dbc, $query3);
                      // Inciso con dropdown
                      echo '
                      <div class="card">
                        <div class="card-header" role="tab">
                          <div class="row">
                            <div class="col-10 col-lg-11">
                              <h5 class="mb-0 small-sm">
                                '.$row2['incisoDesc'].'
                              </h5>
                            </div>
                            <div class="col-2 col-lg-1">
                              <a href="#'.$row2['incisoID'].'" class="collapsed" data-toggle="collapse" data-parent="#inneraccordion" aria-expanded="false" aria-controls="innercollapse">
                              <i class="fa fa-chevron-down fa-lg" aria-hidden="true"></i></a>
                            </div>
                          </div>
                        </div>
                        <div id="'.$row2['incisoID'].'" class="collapse" role="tabpanel" aria-labelledby="innerheading">
                          <div class="card-block mb-2">';
                      // Query innerdrops
                      $query4 = 'SELECT * FROM innerdrop WHERE perteneceID = "'.$row2['incisoID'].'" ORDER BY orden;';
                      $response4 = @mysqli_query($dbc, $query4);
                      while($row4 = mysqli_fetch_array($response4)){
                        // Query documentos dentro de innerdrop
                        $query5 = 'SELECT perteneceID, descripcion AS docDesc, href, tipo, orden FROM documento WHERE perteneceID = "'.$row4['innerdropID'].'" ORDER BY orden DESC;';
                        $response5 = @mysqli_query($dbc, $query5);

                        echo '
                        <div class="card">
                          <div class="card-header bg-white" role="tab">
                            <div class="row">
                              <div class="col-10 col-lg-11">
                                <h5 class="ml-2 small-sm">
                                  '.$row4['descripcion'].'
                                </h5>
                              </div>
                              <div class="col-2 col-lg-1">
                                <h5>
                                <a href="#'.$row4['innerdropID'].'" class="collapsed" data-toggle="collapse"  data-parent="'.$row2['incisoID'].'" aria-expanded="false" aria-controls="innercollapse">
                                <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                </h5>
                              </div>
                            </div>
                          </div>
                          <div id="'.$row4['innerdropID'].'" class="collapse" role="tabpanel" aria-labelledby="innerheading">
                            <div class="card-block my-1">';
                        // Bloque innerdrop multi-1
                        while($row5 = mysqli_fetch_array($response5)){
                          if ($row5['tipo'] == NULL) {
                            echo '
                            <p class="mx-2 xsmall-sm">'.$row5['docDesc'].'</p>';
                          }
                          else {
                            echo '
                            <div class="row">
                              <div class="col-9 col-lg-10">
                                <p class="mx-2 xsmall-sm">'.$row5['docDesc'].'</p>
                              </div>
                              <div class="col-3 col-lg-2">
                                <p><a href="'.$row5['href'].'" target="_blank"onMouseOver="this.style.cssText=\'color: #cc0000\'"onMouseOut="this.style.cssText=\'color: #000000\'"style="color:black;">
                                <i class="fa fa-file-pdf-o mx-1" aria-hidden="true"></i></a></p>
                              </div>
                            </div>
                            ';
                          }
                        }
                        // Cierre de innerdrop multi-1
                        echo '
                            </div>
                          </div>
                        </div>
                        ';
                      }
                      // Cierre de inciso con drop
                      echo '
                          </div>
                        </div>
                      </div>
                      ';
                    }
                    elseif($row2['incisoTipo'] == 'multi-2') {
                      // Query documentos
                      $query3 = 'SELECT perteneceID, descripcion AS docDesc, href, tipo, orden FROM documento WHERE perteneceID = "'.$row2['incisoID'].'" ORDER BY orden;';
                      $response3 = @mysqli_query($dbc, $query3);
                      // Inciso con dropdown
                      echo '
                      <div class="card">
                        <div class="card-header" role="tab">
                          <div class="row">
                            <div class="col-10 col-lg-11">
                              <h5 class="mb-0 small-sm">
                                '.$row2['incisoDesc'].'
                              </h5>
                            </div>
                            <div class="col-2 col-lg-1">
                              <a href="#'.$row2['incisoID'].'" class="collapsed" data-toggle="collapse" data-parent="#inneraccordion" aria-expanded="false" aria-controls="innercollapse">
                              <i class="fa fa-chevron-down fa-lg" aria-hidden="true"></i></a>
                            </div>
                          </div>
                        </div>
                        <div id="'.$row2['incisoID'].'" class="collapse" role="tabpanel" aria-labelledby="innerheading">
                          <div class="card-block mb-2">';
                      // Query innerdrops
                      $query4 = 'SELECT * FROM innerdrop WHERE perteneceID = "'.$row2['incisoID'].'" ORDER BY orden;';
                      $response4 = @mysqli_query($dbc, $query4);

                      while($row4 = mysqli_fetch_array($response4)){
                        // Query innerdrop-2 dentro de innerdrop-1
                        $query5 = 'SELECT * FROM innerdrop WHERE perteneceID = "'.$row4['innerdropID'].'" ORDER BY orden;';
                        $response5 = @mysqli_query($dbc, $query5);
                        echo '
                        <div class="card">
                          <div class="card-header bg-white" role="tab">
                            <div class="row">
                              <div class="col-10 col-lg-11">
                                <h5 class="ml-2 small-sm">
                                  '.$row4['descripcion'].'
                                </h5>
                              </div>
                              <div class="col-2 col-lg-1">
                                <a href="#'.$row4['innerdropID'].'" class="collapsed" data-toggle="collapse"  data-parent="'.$row2['incisoID'].'" aria-expanded="false" aria-controls="innercollapse">
                                <i class="fa fa-chevron-down fa-lg" aria-hidden="true"></i></a>
                              </div>
                            </div>
                          </div>
                          <div id="'.$row4['innerdropID'].'" class="collapse" role="tabpanel" aria-labelledby="innerheading">
                            <div class="card-block mb-2">';
                        // Bloque innerdrop multi-1
                        while($row5 = mysqli_fetch_array($response5)){
                          // Query documentos dentro de innerdrop
                          $query6 = 'SELECT perteneceID, descripcion AS docDesc, href, tipo, orden FROM documento WHERE perteneceID = "'.$row5['innerdropID'].'" ORDER BY orden;';
                          $response6 = @mysqli_query($dbc, $query6);
                          echo '
                          <div class="card">
                            <div class="card-header bg-white" role="tab">
                              <div class="row">
                                <div class="col-10 col-lg-11">
                                  <h5 class="ml-3 small-sm">
                                    '.$row5['descripcion'].'
                                  </h5>
                                </div>
                                <div class="col-2 col-lg-1">
                                  <h5>
                                  <a href="#'.$row5['innerdropID'].'" class="collapsed" data-toggle="collapse"  data-parent="'.$row4['innerdropID'].'" aria-expanded="false" aria-controls="innercollapse">
                                  <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                  </h5>
                                </div>
                              </div>
                            </div>
                            <div id="'.$row5['innerdropID'].'" class="collapse" role="tabpanel" aria-labelledby="innerheading">
                              <div class="card-block my-1">';
                        // Bloque innerdrop multi-2
                        while($row6 = mysqli_fetch_array($response6)){
                          if($row6['tipo'] == 'excel') {
                            echo '
                            <div class="row">
                              <div class="col-9 col-lg-10">
                                <p class="mx-2 xsmall-sm">'.$row6['docDesc'].'</p>
                              </div>
                              <div class="col-3 col-lg-2">
                                <p><a href="'.$row6['href'].'" target="_blank"onMouseOver="this.style.cssText=\'color: #008000\'"onMouseOut="this.style.cssText=\'color: #000000\'"style="color:black;">
                                <i class="fa fa-file-excel-o mx-1" aria-hidden="true"></i></a></p>
                              </div>
                            </div>
                            ';
                          }
                          elseif ($row6['tipo'] == NULL) {
                            echo '
                            <p class="mx-2 xsmall-sm">'.$row6['docDesc'].'</p>';
                          }
                          else {
                            echo '
                            <div class="row">
                              <div class="col-9 col-lg-10">
                                <p class="mx-2 xsmall-sm">'.$row6['docDesc'].'</p>
                              </div>
                              <div class="col-3 col-lg-2">
                                <p><a href="'.$row6['href'].'" target="_blank"onMouseOver="this.style.cssText=\'color: #cc0000\'"onMouseOut="this.style.cssText=\'color: #000000\'"style="color:black;">
                                <i class="fa fa-file-pdf-o mx-1" aria-hidden="true"></i></a></p>
                              </div>
                            </div>
                            ';
                          }
                        }
                        // Cierre de innerdrop multi-2
                        echo '
                              </div>
                            </div>
                          </div>';
                        }
                        // Cierre de innerdrop multi-1
                        echo '
                            </div>
                          </div>
                        </div>
                        ';
                      }
                      // Cierre de inciso con drop
                      echo '
                          </div>
                        </div>
                      </div>
                      ';
                    }
                    else {
                      // Query documentos
                      $query3 = 'SELECT perteneceID, descripcion AS docDesc, href, tipo, orden FROM documento WHERE perteneceID = "'.$row2['incisoID'].'" ORDER BY orden;';
                      $response3 = @mysqli_query($dbc, $query3);
                      // Inciso con dropdown
                      echo '
                      <div class="card">
                        <div class="card-header" role="tab">
                          <div class="row">
                            <div class="col-10 col-lg-11">
                              <h5 class="mb-0 small-sm">
                                '.$row2['incisoDesc'].'
                              </h5>
                            </div>
                            <div class="col-2 col-lg-1">
                              <a href="#'.$row2['incisoID'].'" class="collapsed" data-toggle="collapse" data-parent="#inneraccordion" aria-expanded="false" aria-controls="innercollapse">
                              <i class="fa fa-chevron-down fa-lg" aria-hidden="true"></i></a>
                            </div>
                          </div>
                        </div>
                        <div id="'.$row2['incisoID'].'" class="collapse" role="tabpanel" aria-labelledby="innerheading">
                          <div class="card-block my-1">';
                      // Bloque Inciso
                      while($row3 = mysqli_fetch_array($response3)){
                        if($row3['tipo'] == 'excel') {
                          echo '
                          <div class="row">
                            <div class="col-9 col-lg-10">
                              <p class="mx-2 xsmall-sm">'.$row3['docDesc'].'</p>
                            </div>
                            <div class="col-3 col-lg-2">
                              <p><a href="'.$row3['href'].'" target="_blank"onMouseOver="this.style.cssText=\'color: #008000\'"onMouseOut="this.style.cssText=\'color: #000000\'"style="color:black;">
                              <i class="fa fa-file-excel-o mx-1" aria-hidden="true"></i></a></p>
                            </div>
                          </div>
                          ';
                        }
                        elseif ($row3['tipo'] == NULL) {
                          echo '
                          <p class="mx-2 xsmall-sm">'.$row3['docDesc'].'</p>';
                        }
                        else {
                          echo '
                          <div class="row">
                            <div class="col-9 col-lg-10">
                              <p class="mx-2 xsmall-sm">'.$row3['docDesc'].'</p>
                            </div>
                            <div class="col-3 col-lg-2">
                              <p><a href="'.$row3['href'].'" target="_blank"onMouseOver="this.style.cssText=\'color: #cc0000\'"onMouseOut="this.style.cssText=\'color: #000000\'"style="color:black;">
                              <i class="fa fa-file-pdf-o mx-1" aria-hidden="true"></i></a></p>
                            </div>
                          </div>
                          ';
                        }
                      }
                      // Cierre de inciso con drop
                      echo '
                          </div>
                        </div>
                      </div>
                      ';
                    }
                  }
                  // Cierre de Fraccion con drop
                  echo '
                        </div>
                      </div>
                    </div>
                  </div>';
                }
              }
            } else {
              echo "Couldn't issue database query<br />";
              echo mysqli_error($dbc);
            }
            mysqli_close($dbc);
            ?>
          </div>
          <!-- /.accordion -->

        </div>
      </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include ('footer.php'); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
