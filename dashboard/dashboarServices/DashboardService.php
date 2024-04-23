<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Dashboard Admin</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/">


  <?php include('css.html'); ?>
  <!-- Bootstrap core CSS -->
  <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css" media="screen">
    .sidebar ul li a {
      color: #606060 !important;
      font-weight: 600 !important;
    }

    ul li a:hover {
      color: #333 !important;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../dashboard.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Sign out</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../adimin.php">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="DashboardService.php">
                <span data-feather="briefcase"></span>
                Services
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../DashboardBlogActualite.php">
                <span data-feather="bookmark"></span>
                Blog de Actualite
              </a>
            </li>
          </ul>


        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>
        <div class="my-4">
          <!-- Contenido del nuevo div -->

          <?php

          include 'conexion.php';
          $sqlService   = ("SELECT * FROM service ");
          $queryService = mysqli_query($conn, $sqlService);
          ?>

          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <?php include('msj.php'); ?>
                <h4 class="card-title text-center">Liste des services</h4>
                <p>
                  <a href="#" data-toggle="modal" data-target="#editChildres" class="btn btn-danger" style="float: right;">
                    <i class="zmdi zmdi-crop-free" style='color: black; font-size: 20px;'></i>
                    Ajouter un service</a>
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
                          Modifier
                        </button>
                        <a href="deleteService.php?id=<?php echo $dataService['id']; ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer le service ?');">Supprimer</a>
                      </div>
                    </div>


                    <!--- ventana modal para editar Registro --->
                    <div class="modal fade" id="modificar<?php echo $dataService['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #0190e0  !important;">
                            <h6 class="modal-title" style="color: #fff; text-align: center;">
                              Modifier les informations sur le service
                            </h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>


                          <form method="POST" action="modifierServices.php" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $dataService['id']; ?>">
                            <div class="modal-body" id="cont_modal">
                              <div class="form-group">
                                <label for="recipient-name">Nom du service</label>
                                <input type="text" name="nom" class="form-control" value="<?php echo $dataService['nom']; ?>">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description du service</label>
                                <textarea class="form-control" name="description" rows="8"><?php echo $dataService['description']; ?></textarea>
                              </div>
                              <div class="form-group">
                                <label for="imgService" style="float:left;">Image</label>
                                <br>
                                <img src="<?php echo $dataService['image']; ?>" style="width: 100%; width:150px; border-radius: 5px;">
                                <br><br>
                                <label style="float:left;">Changer l'image</label>
                                <br>
                                <input type="file" name="image" accept="image/*">
                              </div>
                              <!-- Nuevo campo de fecha con el valor obtenido de la base de datos -->
                              <div class="form-group">
                                <label for="fecha">Date</label>
                                <input type="date" name="date" class="form-control" value="<?php echo $dataService['date']; ?>">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                              <button type="submit" class="btn btn-primary">Enregistrer la modification</button>
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
                          Enregistrer un nouveau service
                        </h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>


                      <form method="POST" action="ajouterServices.php" enctype="multipart/form-data">
                        <div class="modal-body" id="cont_modal">
                          <div class="form-group">
                            <label for="recipient-name">Nom du service</label>
                            <input type="text" name="nom" class="form-control" required="true">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description du service</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="foto">Image</label>
                            <br>
                            <input type="file" name="image" accept="image/*" required="true">
                          </div>
                          <div class="form-group">
                            <label for="fecha">Date</label>
                            <input type="date" name="date" class="form-control" required="true">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Enregistrez le service</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                      </form>


                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>






          <?php include('js.html'); ?>
        </div>
      </main>
    </div>
  </div>


  <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>