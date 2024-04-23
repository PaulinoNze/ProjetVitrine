<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Holiday Palace :: Panel</title>
  <?php include('css.html'); ?>
  <style type="text/css" media="screen">
    .sidebar ul li a {
      color: #606060 !important;
      font-weight: 600 !important;
    }

    ul li a:hover {
      color: #333 !important;
    }
  </style>

</head>

<body>
  

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <?php include('msj.php');

          include 'conexion.php';
          $sqlService   = ("SELECT * FROM service ");
          $queryService = mysqli_query($conn, $sqlService);
          ?>

          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-center">LISTA DE Service</h4>
                <p>
                  <a href="#" data-toggle="modal" data-target="#editChildres" class="btn btn-danger" style="float: right;">
                    <i class="zmdi zmdi-crop-free" style='color: black; font-size: 20px;'></i>
                    Agregar Service</a>
                </p>
                <br>

                <div class="row text-center mt-5">
                  <?php
                  while ($dataService = mysqli_fetch_array($queryService)) { ?>
                    <div class="col-12 col-md-4">
                      <div class="form-group" id="marcoborder">
                        <h5 class="text-center" id="titleLogo">
                          Service: <?php echo  $dataService['nom']; ?>
                        </h5>
                        <hr>
                        <p style="text-align: center;"><?php echo $dataService['description']; ?></p>

                        <img src="<?php echo $dataService['image']; ?>" id="image" style="max-width: 80%; height: auto;  margin-bottom: 10px; ">
                        

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificar<?php echo $dataService['id']; ?>">
                          Modificar
                        </button>
                        <a href="deleteService.php?id=<?php echo $dataService['id']; ?>" class="btn btn-danger" onclick="return confirm('Estás seguro que desea eliminar el Service ?');">Borrar</a>
                      </div>
                    </div>


                    <!--- ventana modal para editar Registro --->
                    <div class="modal fade" id="modificar<?php echo $dataService['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #0190e0  !important;">
                            <h6 class="modal-title" style="color: #fff; text-align: center;">
                              Modificar información del Service
                            </h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>


                          <form method="POST" action="modifierServices.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $dataService['id']; ?>">
    <div class="modal-body" id="cont_modal">
        <div class="form-group">
            <label for="recipient-name">Nombre del Servicio</label>
            <input type="text" name="nom" class="form-control" value="<?php echo $dataService['nom']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripción del Servicio</label>
            <textarea class="form-control" name="description" rows="8"><?php echo $dataService['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="imgService" style="float:left;">Imagen</label>
            <br>
            <img src="<?php echo $dataService['image']; ?>" style="width: 100%; width:150px; border-radius: 5px;">
            <br><br>
            <label style="float:left;">Cambiar Imagen</label>
            <br>
            <input type="file" name="image" accept="image/*">
        </div>
        <!-- Nuevo campo de fecha con el valor obtenido de la base de datos -->
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="date" class="form-control" value="<?php echo $dataService['date']; ?>">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Modificación</button>
    </div>
</form>



                        </div>
                      </div>
                    </div>
                    <!-- fin de editar en ventana modal -->
                  <?php } ?>
                </div>



                <!--ventana Modal Nuevo Destino--->
                <div class="modal fade" id="editChildres" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header" style="background-color: #0190e0  !important;">
                        <h6 class="modal-title" style="color: #fff; text-align: center;">
                          Registrar nuevo Service
                        </h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>


                      <form method="POST" action="ajouterServices.php" enctype="multipart/form-data">
                        <div class="modal-body" id="cont_modal">
                          <div class="form-group">
                            <label for="recipient-name">Nombre del Servicio</label>
                            <input type="text" name="nom" class="form-control" required="true">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descripción del Servicio</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="foto">Imagen</label>
                            <br>
                            <input type="file" name="image" accept="image/*" required="true">
                          </div>
                          <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date" name="date" class="form-control" required="true">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Registrar Servicio</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                      </form>


                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include('js.html'); ?>

</body>

</html>