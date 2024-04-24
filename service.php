<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>ExpertD.</title>
    <style>
    .text-decoration-none:hover {
        text-decoration: none; /* Elimina el subrayado predeterminado */
    }
 /* Estilos personalizados */
 .banner {
      background-color: #f0f0f0;
      padding: 50px 0;
    }

    .content-banner {
      text-align: center;
    }

    .container-features {
      display: flex;
      justify-content: space-between;
      margin-top: 50px;
    }

    .card-feature {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      flex: 0 0 calc(25% - 20px);
    }

    .feature-content {
      text-align: center;
    }

    /* Estilos para la sección fuera de la sección */
    .external-div {
      background-color: #eaeaea;
      padding: 50px;
      text-align: center;
    }
    .text-decoration-none:hover::after {
        content: '';
        display: block;
        width: 20%;
        height: 2px;
        background-color: blue; /* Color de la línea azul */
        margin-top: 2px; /* Espacio entre el texto y la línea */
    }
    .nav-link:hover {
        text-decoration: none; /* Elimina el subrayado predeterminado */
    }

    .nav-link:hover::after {
        content: '';
        display: block;
        width: 100%;
        height: 2px;
        background-color: blue; /* Color de la línea azul */
        margin-top: 2px; /* Espacio entre el texto y la línea */
    }
   
    .card-img-top {
        max-width: 80%;
        height: 340px;
    }

</style>
  </head>
  <body>
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
    
 <nav  class="navbar navbar-expand-lg navbar-light p-3"  id="menu">
        <div class="container">
          <a class="navbar-brand" href="#">
              <span class="fs-5 text-primary fw-bold">ExpertD.</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="service.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blogActualites.php">Blog/Actualités</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="apropos.php">À Propos</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
    
                <div class="container-hero" >
        <div class="container hero d-flex justify-content-end align-items-center">
            <div class="container-user">
                <a href="login/login.php"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </div>
             <div class="container-hero" >
        <div class="container hero d-flex align-items-center">
            <div class="customer-support">
                <i class="fa-solid fa-headset"></i>
                <div class="content-customer-support">
                    <span class="text">Soporte al cliente</span>
                    <span class="number">123-456-7890</span>
                </div>
            </div>
        </div>
    </div>
          </div>

        </div>
      </nav>


      <section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content-banner">
                    <p class="mt-5">Café Delicioso</p>
                    <h2 class="mt-5">100% Natural <br> Café Fresco</h2>
                    <a href="#service" class="btn btn-primary">Comprar ahora</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="img/slide2.jpg" alt="Café Fresco" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<br>
  <section class="container-fluid py-3">
    <div class="row justify-content-center">
        <div class="col-lg-3 mt-3 col-md-6 col-sm-12">
            <div class="card-feature d-flex">
                <i class="fas fa-wallet text-primary fa-2x"></i>
                <div class="feature-content ml-3">
                    <span class="font-weight-bold">Envío gratuito</span>
                    <p class="small">En pedidos superiores a $150</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-3 col-md-6 col-sm-12">
            <div class="card-feature d-flex">
                <i class="fas fa-wallet text-primary fa-2x"></i>
                <div class="feature-content ml-3">
                    <span class="font-weight-bold">Contrareembolso</span>
                    <p class="small">100% garantía de devolución de dinero</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-3 col-md-6 col-sm-12">
            <div class="card-feature d-flex">
                <i class="fas fa-gift text-primary fa-2x"></i>
                <div class="feature-content ml-3">
                    <span class="font-weight-bold">Tarjeta regalo especial</span>
                    <p class="small">Ofrece bonos especiales con regalo</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-3 col-md-6 col-sm-12">
            <div class="card-feature d-flex">
                <i class="fas fa-headset text-primary fa-2x"></i>
                <div class="feature-content ml-3">
                    <span class="font-weight-bold">Servicio al cliente 24/7</span>
                    <p class="small">Llámenos 24/7 al 123-456-7890</p>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<section>
<div class="external-div" id="service">
<h2 class="text-primary"><strong>Découvrez notre sélection de services !</strong></h2>
     <p>Explorez une variété de services uniques.</p>
    <?php
include 'dashboard/dashboarServices/conexion.php';
$sql = "SELECT * from service";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    ?>
    <div class="row">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="col-md-4">
                <div class="card mb-4" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                    <div class="box-image3__box">
                      <br>
                        <!-- Corregir la ruta de la imagen -->
                        <img src="<?php echo 'dashboard/dashboarServices/' . $row['image']; ?>" class="card-img-top custom-img" alt="">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title course-title text-primary" style="font-size: 25px;"><strong><?php echo $row['nom']; ?></strong></h2>
                        <p class="card-text"><?php echo $row['description']; ?></p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <i class="fas fa-calendar-alt mr-2 text-primary"></i>
                                <?php echo $row['date']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}
?>
</section>
<!--========================================================== -->
                        <!--FOOTER-->
<!--========================================================== -->

<div class="container-fluid d-flex justify-content-center">
    <div class="row p-5 bg-white text-dark border-top border-3">
        <div class="col-xs-12 col-md-6 col-lg-5">
            <p class="h3 mb-3 text-dark"><strong>lorem</strong></p>
            <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis cumque, tempora dignissimos, dolore nulla iste quis aut, quos voluptas !</p>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <p class="h5 text-dark"><strong>Link</strong></p>
            <div class="mb-2">
                <a class="text-dark text-decoration-none" href="index.php">Accueil</a>
            </div>
            <div class="mb-2">
                <a class="text-dark text-decoration-none" href="service.php">Services</a>
            </div>
            <div class="mb-2">
                <a class="text-dark text-decoration-none" href="blogActualites.php">Blog/Actualités</a>
            </div>
            <div class="mb-2">
                <a class="text-dark text-decoration-none" href="apropos.php">À Propos</a>
            </div>
               <div class="mb-2">
                <a class="text-dark text-decoration-none" href="contact.php">Contact</a>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">
            <p class="h5 mb-3 text-dark"><strong>Contact</strong></p>
            <div class="mb-2">
                <a class="text-dark text-decoration-none" href="#"><i class="fab fa-facebook"></i>  Facebook</a>
            </div>
            <div class="mb-2">
                <a class="text-dark text-decoration-none" href="#"><i class="fab fa-twitter"></i>  Twitter</a>
            </div>
            <div class="mb-2">
                <a class="text-dark text-decoration-none" href="#"><i class="fab fa-instagram"></i>  Instagram</a>
            </div>
        </div>
    </div>
</div>
<footer class="bg-secondary text-white">
    <div class="container text-center py-4">
        <p class="mb-0">&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
    </div>
</footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
    	<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
  </body>
</html>