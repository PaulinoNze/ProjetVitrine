<!doctype php>
<php lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="./css/main.css">

        <title>ExpertD.</title>
    </head>
    <style>
        
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

    .card-img-top {
        max-width: 80%;
        height: 340px;
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
      background-color: white;
      padding: 50px;
      text-align: center;
    }
        .numbered-list ol {
            list-style: none;
            counter-reset: li;
        }

        .numbered-list ol li {
            counter-increment: li;

        }

        .numbered-list ol li:before {
            content: counter(li);
            background-color: #0062ff;
            color: white;
            border-radius: 50%;
            display: inline-block;
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            margin-right: 10px;
        }

        .text-decoration-none:hover {
            text-decoration: none;
            /* Elimina el subrayado predeterminado */
        }

        .text-decoration-none:hover::after {
            content: '';
            display: block;
            width: 20%;
            height: 2px;
            background-color: blue;
            /* Color de la línea azul */
            margin-top: 2px;
            /* Espacio entre el texto y la línea */
        }

        .nav-link:hover {
            text-decoration: none;
            /* Elimina el subrayado predeterminado */
        }

        .nav-link:hover::after {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background-color: blue;
            /* Color de la línea azul */
            margin-top: 2px;
            /* Espacio entre el texto y la línea */
        }
    </style>

    <body>
        <!--========================================================== -->
        <!-- ENCABEZADO -->
        <!--========================================================== -->




        <nav class="navbar navbar-expand-lg navbar-light p-3" id="menu">
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

                    <div class="container-hero">
                        <div class="container hero d-flex justify-content-end align-items-center">
                            <div class="container-user">
                                <a href="login/login.php"><i class="fa-solid fa-user"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="container-hero">
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

        <!--========================================================== -->
        <!-- SLIDER DE IMAGENES-->
        <!--========================================================== -->

        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="./img/slide1.jpg" class="d-block w-100" alt="">
                </div>


                <div class="carousel-item" data-bs-interval="3000">
                    <img src="./img/slide2.jpg" class="d-block w-100" alt="...">
                </div>


                <div class="carousel-item" data-bs-interval="3000">
                    <img src="./img/slide3.jpg" class="d-block w-100" alt="...">
                </div>


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container mb-3 p-5 border-top border-3">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-4 text-primary"><strong>Título del Contenido</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="figure">
                        <img src="img/slide2.jpg" alt="Stylized Figure" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="numbered-list">
                                <ol>
                                    <li>
                                        <h4><strong> Los mejores productos</strong></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, deserunt, reprehenderit? Velit non, in doloribus. Rerum voluptas, reiciendis id velit accusamus minima aperiam aliquid accusantium, sint nihil est nisi vero?</p>
                                    </li>
                                    <li>
                                        <h4><strong>Lorem ipsum dolor sit</strong> </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse recusandae dolorem praesentium corporis, optio eum possimus maxime laudantium et sint, earum provident vitae libero hic saepe voluptatibus perspiciatis veritatis corrupti..</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--========================================================== -->
        <!-- INTRODUCCION DE SERVICIOS-->
        <!--========================================================== -->


        <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
            <h1 class="p-3 fs-2 border-top border-3">Una agencia única para todas tus necesidades de <span class="text-primary">Marketing Digital<span /></h1>
            <p class="p-3  fs-4">
                <span class="text-primary">ExpertD.</span> es la agencia donde te ayudamos establecer tu presencia online. SEO, paginas WEB, tiendas virtuales, redes sociales
            </p>
        </section>

        <!--========================================================== -->
        <!-- TIPOS DE SERVICIOS Destacar los puntos fuertes de la empresa-->
        <!--========================================================== -->


        <section class="w-100">
            <div class="row w-75 mx-auto" id="servicios-fila-1">
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                    <img src="./img/desarrollo.png" alt="desarrollo" width="200" height="200">

                    <div>
                        <h3 class="fs-5 mt-4 px-4 pb-1">Desarrollo</h3>
                        <p class="px-4">Desarrollo de aplicaciones WEB, moviles y ecommerce</p>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
                    <img src="./img/concepto.png" alt="concepto" width="200" height="200">

                    <div>
                        <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Branding</h3>
                        <p class="px-4">Diseño, Conceptualización e Implementación de productos digitales</p>
                    </div>
                </div>
            </div>

            <div class="row w-75 mx-auto mb-5" id="servicios-fila-2">
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
                    <img src="./img/comunicaciones.png" alt="comunicaciones" width="200" height="200">

                    <div>
                        <h3 class="fs-5 mt-4 px-4 pb-1">Comunicaciones</h3>
                        <p class="px-4">Desarrollo del plan de comunicaciones para sus clientes.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                    <img src="./img/seo.png" alt="seo" width="200" height="200">

                    <div>
                        <h3 class="fs-5 mt-4 px-4 pb-1">SEO</h3>
                        <p class="px-4">Analizamos la eficiencia y optimizamos los sitios WEB</p>
                    </div>
                </div>
            </div>
        </section>


        <!--========================================================== -->
        <!-- TIPOS DE SERVICIOS -->
        <!--========================================================== -->
        <section>
<div class="external-div" id="service">
<h2 class="text-primary"><strong>Découvrez notre sélection de services !</strong></h2>
     <p>Explorez une variété de services uniques.</p>
    <?php
include 'dashboard/dashboarServices/conexion.php';
$sql = "SELECT * from service LIMIT 3";
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
                        <a class="text-dark text-decoration-none" href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    </div>
                    <div class="mb-2">
                        <a class="text-dark text-decoration-none" href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    </div>
                    <div class="mb-2">
                        <a class="text-dark text-decoration-none" href="#"><i class="fab fa-instagram"></i> Instagram</a>
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
        <script src="main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
        <script>
  feather.replace();
</script>
    </body>
</php>