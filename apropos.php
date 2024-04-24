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
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="heroes.css" rel="stylesheet">

        <title>ExpertD.</title>
        <style>
            .img-team {
                max-width: 100px;
                /* Ajusta el tamaño máximo según tus preferencias */
                border-radius: 50%;
                /* Esto hace que la imagen sea circular */
            }

            .no-border {
                border: none;
                margin: 0;
                padding: 0;
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

        <main class="border-top border-3">
            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="display-5 fw-bold">Nom de l'entreprise</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sit possimus explicabo!</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                    </div>
                </div>
            </div>

            <div class="b-example-divider"></div>

            <div class="px-4 pt-5 my-5 text-center border-bottom">
                <h1 class="display-4 fw-bold text-primary">La maison de l'entreprise</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat reprehenderit saepe voluptatum odit nemo dignissimos consequatur nisi, unde ipsum quis in modi eos velit, quas laudantium tempora eveniet autem. Quia?</p>
                </div>
                <div class="overflow-hidden" style="max-height: 30vh;">
                    <div class="container px-5">
                        <img src="bootstrap-docs.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                        <h1 class="display-4 fw-bold lh-1 text-primary"> Historique de la société</h1>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit mollitia ex praesentium rerum corporis repellat? Saepe ex quasi nisi, eligendi dignissimos perferendis unde ad, aspernatur totam laudantium, architecto quia maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, eos deserunt praesentium natus voluptatum fuga optio iste eum. Voluptatibus debitis iste atque. Iure, excepturi. Doloribus deserunt id consequatur atque voluptatum?</p>
                    </div>
                    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                        <img class="rounded-lg-3" src="bootstrap-docs.png" alt="" width="720">
                    </div>
                </div>
            </div>

            <section class="container my-5">
                <h2 class="text-center mb-4 text-primary"><strong>Équipe de direction</strong></h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <!-- Director -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/hombre-icono2.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del director">
                            <div class="card-body text-center">
                                <h5 class="card-title">Nom du directeur</h5>
                                <p class="card-text">Poste : Directeur</p>
                            </div>
                        </div>
                    </div>
                    <!-- Subdirector -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/hombre-icono2.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del subdirector">
                            <div class="card-body text-center">
                                <h5 class="card-title">Nom du directeur adjoint</h5>
                                <p class="card-text">Poste : Directeur adjoint</p>
                            </div>
                        </div>
                    </div>
                    <!-- Técnico -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/mujer-icono.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del técnico">
                            <div class="card-body text-center">
                                <h5 class="card-title">Nom du technicien</h5>
                                <p class="card-text">Poste : Technicien</p>
                            </div>
                        </div>
                    </div>
                    <!-- Recursos Humanos -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/hombre-icono2.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del de Recursos Humanos">
                            <div class="card-body text-center">
                                <h5 class="card-title">Nom des ressources humaines</h5>
                                <p class="card-text">Poste : Ressources humaines</p>
                            </div>
                        </div>
                    </div>
                    <!-- Secretario 1 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/hombre-icono2.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del Secretario 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Nom du secrétaire 1</h5>
                                <p class="card-text">Poste : Secrétaire</p>
                            </div>
                        </div>
                    </div>
                    <!-- Secretario 2 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/mujer-icono.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del Secretario 2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Nom du secrétaire 2</h5>
                                <p class="card-text">Poste : Secrétaire</p>
                            </div>
                        </div>
                    </div>
                    <!-- Empleado 1 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/hombre-icono2.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del empleado 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Nom de l'employé 1</h5>
                                <p class="card-text">Poste : Employé</p>
                            </div>
                        </div>
                    </div>
                    <!-- Empleado 2 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/hombre-icono2.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del empleado 2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Nom de l'employé 2</h5>
                                <p class="card-text">Poste : Employé</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/mujer-icono.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del empleado 2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Nom de l'employé 2</h5>
                                <p class="card-text">Poste : Employé</p>
                            </div>
                        </div>
                    </div>
                    <!-- Agregar más tarjetas para más miembros del equipo -->
                </div>
            </section>

            <div class="b-example-divider"></div>

            <section class="container py-5">
                <h2 class="text-center mb-4 text-primary"><strong>Témoignages de clients</strong></h2>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card no-border">
                            <img src="img/hombre-icono2.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto Cliente 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Nom du client 1</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis convallis tellus vel neque vehicula gravida.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card no-border">
                            <img src="img/mujer-icono.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto Cliente 2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Nom du client 2</h5>
                                <p class="card-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card no-border">
                            <img src="img/hombre-icono2.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto Cliente 2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Nom du client 3</h5>
                                <p class="card-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Agrega más testimonios aquí -->
                </div>
            </section>


        </main>


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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="main.js"></script>
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            });
        </script>
        <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
        <script>
            feather.replace();
        </script>
    </body>
</php>