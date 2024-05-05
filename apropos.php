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
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <link rel="icon" href="img/log.png" type="image/x-icon">

        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="heroes.css" rel="stylesheet">

        <title>ABDO SARL</title>
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
                    <span class="fs-5 text-primary fw-bold">ABDO SARL.</span>
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

        <main class="border-top border-3">
            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/log.png" alt="" width="230" height="150">
                <h1 class="display-5 fw-bold">B2B2C ABDO SARL</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Notre société de marketing digital se spécialise dans le renforcement de la présence en ligne des entreprises de toutes tailles. Avec des stratégies innovantes et une approche axée sur les résultats, nous aidons nos clients à atteindre leurs objectifs commerciaux grâce à des campagnes efficaces sur les réseaux sociaux, la publicité en ligne, l'optimisation des moteurs de recherche et le développement web. </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                    </div>
                </div>
            </div>

            <div class="b-example-divider"></div>

            <div class="px-4 pt-5 my-5 text-center border-bottom">
                <h1 class="display-4 fw-bold text-primary">La maison de l'entreprise</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">ABDO SARL, une entreprise ancrée au cœur de Dakhla

                        Implantée dans la ville de Dakhla, au coeur de la région du Sahara marocain, ABDO SARL a choisi ce lieu stratégique pour développer ses activités. Notre siège social se trouve dans le quartier dynamique de Molay Rachid, une zone en pleine expansion économique et entrepreneuriale.

                        Ce positionnement géographique nous permet d'être au plus près de nos clients et de nos partenaires, tout en bénéficiant des atouts de la région. La ville de Dakhla, véritable hub économique de la zone, offre un environnement propice aux affaires grâce à ses infrastructures modernes et son réseau de transport performant.</p>
                </div>
                <div class="overflow-hidden" style="max-height: 30vh;">
                    <div class="container px-5">
                        <img src="img/casa.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="600" loading="lazy">
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                        <h1 class="display-4 fw-bold lh-1 text-primary"> Historique de la société</h1>
                        <p class="lead">Beaucoup d’entreprises essaient de profiter des atouts d’Internet, notamment de
                            sa puissance de diffusion, en menant des actions dites de marketing digital. Ce
                            dernier se définit comme une action menée par une entreprise afin de se faire
                            connaître auprès d’un maximum d’internautes grâce à leur positionnement (c’est
                            pourquoi on parle aussi parfois de réseautage). Il s’agit donc d’une technique
                            reposant sur la transmission de proche en proche, par la méthode digitalisation
                            (Facebook, Twitter, Instagram, WhatsApp…), de messages commerciaux, les
                            consommateurs devenant, gratuitement, notamment les meilleurs commerciaux
                            de la marque.</p>
                    </div>
                    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                        <img class="rounded-lg-3" src="img/casa2.jpg" alt="" width="720">
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
                                <h5 class="card-title">Abdelghafour ELOUARDI</h5>
                                <p class="card-text">Poste : Gérant et Social seller</p>
                            </div>
                        </div>
                    </div>
                    <!-- Subdirector -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/hombre-icono2.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del subdirector">
                            <div class="card-body text-center">
                                <h5 class="card-title">Yassine OUSSAID</h5>
                                <p class="card-text">Poste : Responsable
                                    Commercial
                                    FOOD</p>
                            </div>
                        </div>
                    </div>
                    <!-- Técnico -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/mujer-icono.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del técnico">
                            <div class="card-body text-center">
                                <h5 class="card-title">Halima LAAFAR</h5>
                                <p class="card-text">Poste : Réception
                                    et Suivi</p>
                            </div>
                        </div>
                    </div>
                    <!-- Recursos Humanos -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/hombre-icono2.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del de Recursos Humanos">
                            <div class="card-body text-center">
                                <h5 class="card-title">Mohamed Ahboub</h5>
                                <p class="card-text">Poste : Social media
                                    manager</p>
                            </div>
                        </div>
                    </div>
                    <!-- Secretario 1 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/hombre-icono2.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del Secretario 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Chakir MRANI
                                </h5>
                                <p class="card-text">Poste : Service de
                                    Confirmation</p>
                            </div>
                        </div>
                    </div>
                    <!-- Secretario 2 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/mujer-icono.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto del Secretario 2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Chadi KACIMI</h5>
                                <p class="card-text">Poste : Responsable
                                    Commercial
                                    EXPRESS</p>
                            </div>
                        </div>
                    </div>
                    <!-- Empleado 1 -->
                    <!-- Agregar más tarjetas para más miembros del equipo -->
                </div>
            </section>

            <div class="b-example-divider"></div>

            <section class="container py-5">
                <h2 class="text-center mb-4 text-primary"><strong>Témoignages de clients</strong></h2>
                <div class="owl-carousel owl-theme">
                    <?php
                    include 'database.php';
                    $sql = "SELECT * FROM temoignages";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                            <div class="item">
                                <div class="card no-border">
                                    <?php
                                    if(!empty($row['image'])){
                                    ?>
                                    <img src="<?php echo 'data:image;base64,' . base64_encode($row['image']); ?>" class="card-img-top rounded-circle img-team mx-auto" alt="Foto Cliente 1">
                                    <?php
                                    }else{
                                    ?>
                                    <img src="img/hombre-icono2.jpeg" class="card-img-top rounded-circle img-team mx-auto" alt="Foto Cliente 1">
                                    <?php
                                    }
                                    ?>
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><?php echo $row['fullname']; ?></h5>
                                        <p class="card-text"><?php echo $row['temoignages']; ?>mb</p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo '<h2 class="text-center mb-4 text-primary">Aucun Témoignages</h2>';
                    }
                    ?>
                    <!-- Agrega más testimonios aquí -->
                </div>
            </section>

            <div class="col-lg-12 border rounded shadow-lg">

                <form class="contact-form bg-white rounded p-5" id="comment-form" method="post" action="PHP/ajouttemoignages.php">
                    <h4 class="mb-4">Écrire un témoignages</h4>
                    <?php if (isset($_GET['message'])) { ?>
                        <small class="message" style="color: green;"> <?php echo $_GET['message']; ?></small>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom:" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Prenom:" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        <small class="form-text text-muted">Max. taille du fichier : 50 Mo. Images autorisées : jpg, gif, png. </small>
                    </div>
                    <br>
                    <textarea class="form-control mb-3" name="temoignages" id="temoignages" cols="30" rows="5" placeholder="témoignages" required></textarea>

                    <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Poster un témoignages">
                </form>
            </div>

        </main>


        <!--========================================================== -->
        <!--FOOTER-->
        <!--========================================================== -->

        <div class="container-fluid d-flex justify-content-center">
            <div class="row p-5 bg-white text-dark border-top border-3">
                <div class="col-xs-12 col-md-6 col-lg-5">
                    <p class="h3 mb-3 text-dark"><strong>ABDO SARL</strong></p>
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
                <p class="mb-0">&copy; 2024 B2B2C ABDO SARL. Tous droits réservés.</p>
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