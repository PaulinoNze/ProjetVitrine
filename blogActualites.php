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
        <style>
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
    </head>

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
        <!--CONTENT-->
        <!--========================================================== -->
        <section class="container blogs">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="heading-1 text-primary"><strong>Blogs et Actualités</strong></h2>
        </div>
    </div>
    <div class="row">
        <?php
        include_once 'PHP/functions.php';
        include 'database.php';
        $sql = "SELECT * FROM blog";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-md-4"> <!-- Note this line -->
                <div class="card-blog">
                    <div class="container-img">
                        <img src="<?php echo 'data:image;base64,' . base64_encode($row['image']); ?>" alt="Imagen service 1" />
                    </div>
                    <div class="content-blog">
                        <h4><strong><?php echo $row['blogNom']; ?></strong> </h4>
                        <span class="text-primary"><?php echo formatDate($row['datePublished']); ?></span>
                        <p>
                            <?php echo $row['description']; ?>
                        </p>
                        <div class="btn-read-more"><a href="blogContent.php?id=<?php echo $row['blogid']?>" style="color: white; text-decoration: none;">En savoir plus</a></div>
                    </div>
                </div>
            </div> <!-- Note this line -->
        <?php
            }
        } else {
            echo "<h4><strong>Aucun blog pour le moment</strong>";
        }
        ?>
    </div>
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
        <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
    </body>
</php>