<?php
session_start();
if (isset($_SESSION['userid']) && isset($_SESSION['email'])) {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vitrine</title>
        <link rel="shortcut icon" type="image/png" href="../login/assets/images/logos/favicon.png" />
        <link rel="stylesheet" href="../login/assets/css/styles.min.css" />
    </head>

    <body>
        <!--  Body Wrapper -->
        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
            <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center w-100">
                    <div class="row justify-content-center w-100">
                        <div class="col-md-8 col-lg-6 col-xxl-3">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                        <img src="../login/assets/images/logos/dark-logo.svg" width="180" alt="">
                                    </a>
                                    <p class="text-center">Your Social Campaigns</p>
                                    <form action="../PHP/modifierInfo.php" method="POST">
                                        <?php
                                        include '../database.php';
                                        $userid = $_SESSION['userid'];
                                        $sql = "SELECT nom, prenom, email FROM users WHERE userid = $userid";
                                        $result = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_array($result);
                                        ?>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nom</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" value="<?php echo $row['nom']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Prenom</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prenom" value="<?php echo $row['prenom']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $row['email']; ?>">
                                            <input type="hidden" name="userid" value="<?php echo $userid ?>">
                                        </div>

                                        <input type="submit" value="Soumettre" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../login/assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../login/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
<?php
} else {
    header("location: ../index.php");
}
?>