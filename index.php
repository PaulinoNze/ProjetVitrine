<!doctype php>
<php lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="paulino nze, syabonga">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="icon" href="img/log.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <title>sté B2B2C ABDO.</title>
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
    .owl-carousel {
    display: flex; /* Alinear elementos horizontalmente */
    flex-wrap: nowrap; /* Evitar que los elementos se envuelvan a la siguiente línea */
    overflow-x: auto; /* Permitir desplazamiento horizontal si los elementos no caben en el contenedor */
    -webkit-overflow-scrolling: touch; /* Mejorar el desplazamiento en dispositivos móviles */
}

.owl-carousel .item {
    flex: 0 0 auto; /* Establecer el ancho de los elementos */
    margin-right: 10px; /* Agregar un pequeño margen entre elementos */
}

.owl-carousel .item img {
    width: 100%; /* Ajustar el tamaño de las imágenes */
    height: auto; /* Mantener la proporción de la imagen */
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
                    <span class="fs-5 text-primary fw-bold">sté B2B2C ABDO.</span>
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
                                    <span class="text">Soutien à la clientèle</span>
                                    <span class="number"> 0761816135</span>
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
              
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="figure">
                        <img src="img/ll.jpg" alt="Stylized Figure" class="img-fluid" style="border-radius: 270px;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="numbered-list">
                            <br> <br> <br>
                                <ol>
                                    <li>
                                        <h4><strong> Une agence tout-en-un pour votre stratégie digitale B2B2C</strong></h4>
                                        <p>sté B2B2C ABDO est votre partenaire idéal pour tous vos besoins de marketing digital. Que ce soit en matière de logistique, de transport, de photographie ou de communication marketing, notre équipe d'experts est là pour vous accompagner et vous aider à établir une présence en ligne efficace et adaptée à votre activité B2B2C. </p>
                                    </li>
                                    <li>
                                        <h4><strong>L'agence full-service qui propulse votre business en ligne</strong> </h4>
                                        <p>Chez sté B2B2C ABDO, nous sommes fiers d'être une agence digitale complète, capable de répondre à l'ensemble de vos problématiques marketing.</p>
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
            <h1 class="p-3 fs-2 border-top border-3">Une agence unique pour tous vos besoins en  <span class="text-primary">Transport<span /></h1>
            <p class="p-3  fs-4">
                <span class="text-primary">L'agence sté B2B2C ABDO.</span>est votre partenaire unique pour répondre à tous vos besoins en  transport B2B2C. 
.         Nous vous aidons à établir votre présence en ligne et à atteindre vos objectifs de communication et de promotion.

            </p>
        </section>
        <!--========================================================== -->
        <!-- TIPOS DE SERVICIOS Destacar los puntos fuertes de la empresa-->
        <!--========================================================== -->


        <section class="w-100">
            <div class="row w-75 mx-auto" id="servicios-fila-1">
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                    <img src="./img/logistica.jpeg" alt="desarrollo" width="200" height="200">

                    <div>
                        <h3 class="fs-5 mt-4 px-4 pb-1">Logistique</h3>
                        <p class="px-4"> Il s'agit de l'organisation et de la gestion d'événements, tels que des conférences, des foires, des concerts, etc.</p>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
                    <img src="./img/trans.jpeg" alt="concepto" width="200" height="200">

                    <div>
                        <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Transport</h3>
                        <p class="px-4">C'est l'installation et la gestion des systèmes audio et sonores pour les événements et les spectacles.</p>
                    </div>
                </div>
            </div>

            <div class="row w-75 mx-auto mb-5" id="servicios-fila-2">
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
                    <img src="./img/poto.jpeg" alt="comunicaciones" width="200" height="200">

                    <div>
                        <h3 class="fs-5 mt-4 px-4 pb-1">Photographie</h3>
                        <p class="px-4">Cela fait référence à la pratique et à la technique de la photographie.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                    <img src="./img/seo.png" alt="seo" width="200" height="200">

                    <div>
                        <h3 class="fs-5 mt-4 px-4 pb-1">Communication marketing</h3>
                        <p class="px-4"> C'est l'ensemble des techniques et des stratégies utilisées pour promouvoir des produits ou des services.</p>
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

<section class="container my-5">
    <h2 class="text-center mb-4 text-primary"><strong>Nos Partenaires</strong></h2>
    <div class="owl-carousel owl-theme">
        <!-- Aquí se agregarán las imágenes de los patrocinadores -->
        <div class="item rounded-circle"><img src="img/descarga.png" alt="Patrocinador 1" ></div>
        <div class="item rounded-circle"><img src="img/logojakoumnv.png" alt="Patrocinador 2" style="margin-top: 70px;"></div>
        <div class="item rounded-circle"><img src="img/logoluxmssage.png" alt="Patrocinador 3" style="margin-top: 30px;"></div>
        <div class="item rounded-circle"><img src="img/logospeedaf.webp" alt="Patrocinador 3" ></div>
        <div class="item rounded-circle"><img src="img/logotemu.png" alt="Patrocinador 3" style="margin-top: 50px;"></div>

        <!-- Agrega más imágenes de patrocinadores aquí -->
    </div>
</section>


        <!--========================================================== -->
        <!--FOOTER-->
        <!--========================================================== -->

        <div class="container-fluid d-flex justify-content-center">
            <div class="row p-5 bg-white text-dark border-top border-3">
            <div class="col-xs-12 col-md-6 col-lg-5">
          <p class="h3 mb-3 text-dark"><strong>sté B2B2C ABDO</strong></p>
          <p class="text-dark">Notre entreprise est en constante évolution et emploie une équipe jeune et 
dynamique. Depuis sa création, sous une forme juridique de société commerciale 
à responsabilité limitée, le transport urbain de marchandises, les opérations de 
livraison et l’installation des systèmes des caisses.</p>
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
                        <a class="text-dark text-decoration-none" href="https://www.facebook.com/LIVRAISON.DAKHLA?mibextid=LQQJ4d"><i class="fab fa-facebook"></i> Facebook</a>
                    </div>
                    <div class="mb-2">
                        <a class="text-dark text-decoration-none" href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    </div>
                    <div class="mb-2">
                        <a class="text-dark text-decoration-none" href="https://www.instagram.com/p/CiLYVLmL_tJ/?igsh=czljcDRvNHppMnFl"><i class="fab fa-instagram"></i> Instagram</a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-secondary text-white">
            <div class="container text-center py-4">
                <p class="mb-0">&copy; 2024  B2B2C sté B2B2C ABDO. Tous droits réservés.</p>
            </div>
        </footer>



<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- JavaScript de Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Inicialización de Owl Carousel -->
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    loop: true, // Repetir el carrusel
    margin: 10, // Margen entre elementos
    nav: false, // Ocultar botones de navegación
    autoplay: true, // Reproducción automática
    autoplayTimeout: 3000, // Tiempo de espera entre transiciones (en milisegundos)
    autoplayHoverPause: true, // Pausar reproducción automática al pasar el mouse sobre el carrusel
    responsive:{
      0:{
        items:1 // Mostrar 1 elemento en pantallas pequeñas
      },
      600:{
        items:3 // Mostrar 3 elementos en pantallas medianas
      },
      1000:{
        items:5 // Mostrar 5 elementos en pantallas grandes
      }
    }
  });
});
</script>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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