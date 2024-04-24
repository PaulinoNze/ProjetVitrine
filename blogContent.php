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
                                <a href="dashboard/adimin.php"><i class="fa-solid fa-user"></i></a>
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
        <section class="section blog-wrap bg-gray" style="background-color: #f0f0f0;">
            <br>
            <?php
            include "database.php";
            include_once 'PHP/functions.php';
            $blogid = $_GET['id'];
            $sql = "SELECT * FROM blog WHERE blogid = $blogid";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12 mb-5">
                                <div class="single-blog-item">
                                    <img src="<?php echo 'data:image;base64,' . base64_encode($row['image']); ?>" alt="" class="img-fluid rounded">

                                    <div class="blog-item-content bg-white p-5">
                                        <div class="blog-item-meta bg-gray py-1 px-2">
                                            <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i>
                                                <?php echo formatDate($row['datePublished']); ?></span>
                                        </div>

                                        <h2 class="mt-3 mb-4"><a href="blog-single.html"><?php echo $row['blogNom'] ?></a></h2>
                                        <p class="lead mb-4"><?php echo $row['content'] ?></p>

                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 mb-5">
                                <div class="posts-nav bg-white p-5 d-lg-flex d-md-flex justify-content-between">
                                    <?php
                                    // Query for previous post
                                    $sqlPrevious = "SELECT * FROM blog WHERE blogid < $blogid ORDER BY blogid DESC LIMIT 1";
                                    $resultPrevious = mysqli_query($conn, $sqlPrevious);
                                    $rowPrevious = mysqli_fetch_assoc($resultPrevious);

                                    if ($rowPrevious) {
                                        echo '<a class="post-prev align-items-center" href="blogContent.php?id=' . $rowPrevious['blogid'] . '">';
                                        echo '<div class="posts-prev-item mb-4 mb-lg-0">';
                                        echo '<span class="nav-posts-desc text-color">- Previous Post</span>';
                                        echo '<h6 class="nav-posts-title mt-1">' . $rowPrevious['blogNom'] . '</h6>';
                                        echo '</div></a>';
                                    }

                                    // Query for next post
                                    $sqlNext = "SELECT * FROM blog WHERE blogid > $blogid ORDER BY blogid ASC LIMIT 1";
                                    $resultNext = mysqli_query($conn, $sqlNext);
                                    $rowNext = mysqli_fetch_assoc($resultNext);

                                    if ($rowNext) {
                                        echo '<div class="border"></div>';
                                        echo '<a class="posts-next" href="blogContent.php?id=' . $rowNext['blogid'] . '">';
                                        echo '<div class="posts-next-item pt-4 pt-lg-0">';
                                        echo '<span class="nav-posts-desc text-lg-right text-md-right text-color d-block">- Next Post</span>';
                                        echo '<h6 class="nav-posts-title mt-1">' . $rowNext['blogNom'] . '</h6>';
                                        echo '</div></a>';
                                    }
                                    ?>
                                </div>
                            </div>


                            <?php
                            include "database.php";
                            $blogid = $_GET['id'];
                            $sql = "SELECT count(commentaire) FROM commentaire WHERE blogid = $blogid";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result)

                            ?>
                            <div class="col-lg-12 mb-5">
                                <div class="comment-area card border-0 p-5" style="height: 450px; overflow-y: auto;">
                                    <h4 class="mb-4">Commentaires (<?php echo $row['count(commentaire)']; ?>)</h4>
                                    <ul class="comment-tree list-unstyled">
                                        <?php
                                        include "database.php";
                                        include_once 'PHP/functions.php';
                                        $blogid = $_GET['id'];
                                        $sql = "SELECT nom, prenom, commentaire, datePublished FROM commentaire WHERE blogid = $blogid";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                                <li class="mb-5">
                                                    <div class="comment-area-box d-flex align-items-start"> <!-- Use align-items-start to align items from the start (top) -->
                                                        <img alt="" src="img/profile.png" width="50px" class="mr-3 comment-profile-img" style="margin-right: 10px;"> <!-- Image with margin-right -->
                                                        <div>
                                                            <h5 class="mb-1"><?php echo $row['prenom'] . " " . $row['nom']; ?></h5> <!-- Name -->
                                                            <span class="date-comm">Publié <?php echo formatDate($row['datePublished']); ?></span> <!-- Date published -->
                                                            <p class="mt-3 mb-0"><?php echo $row['commentaire']; ?></p> <!-- Comment content with top margin -->
                                                        </div>
                                                    </div>
                                                </li>



                                        <?php
                                            }
                                        } else {
                                            echo "<h3> Pas des commentaires </h3>";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <form class="contact-form bg-white rounded p-5" id="comment-form" method="post" action="PHP/ajoutCommentaire.php">
                                    <h4 class="mb-4">Écrire un commentaire</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom:">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Prenom:">
                                                <input type="hidden" name="blogid" value="<?php echo $_GET['id'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <textarea class="form-control mb-3" name="commentaire" id="commentaire" cols="30" rows="5" placeholder="Commentaire"></textarea>

                                    <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Poster un commentaire">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-wrap">

                            <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                                <h5>Autres blogs</h5>
                                <?php
                                include_once 'PHP/functions.php';
                                include 'database.php';
                                $blogid = $_GET['id'];
                                $sql = "SELECT * FROM blog WHERE blogid <> $blogid";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                ?>
                                        <div class="media border-bottom py-3 d-flex align-items-center">
                                            <!-- Image -->
                                            <a href="<?php echo $row['blogid']; ?>">
                                                <img class="mr-4" src="<?php echo 'data:image;base64,' . base64_encode($row['image']); ?>" alt="" width="50px" style="margin-right: 10px;">
                                            </a>
                                            <!-- Media Body (Blog Name and Date) -->
                                            <div class="media-body">
                                                <!-- Blog Name -->
                                                <h6 class="my-2">
                                                    <a href="blogContent.php?id=<?php echo $row['blogid']; ?>"><?php echo $row['blogNom']; ?></a>
                                                </h6>
                                                <!-- Date Published -->
                                                <span class="text-sm text-muted"><?php echo formatDate($row['datePublished']); ?></span>
                                            </div>
                                        </div>

                                <?php
                                    }
                                } else {
                                    echo "<h3> Aucun blogs </h3>";
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
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