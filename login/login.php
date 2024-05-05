<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABDO SARL</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
    <meta name="author" content="paulino nze, syabonga">
    <link rel="stylesheet" href="assets/css/styles.min.css" />
    <link rel="icon" href="../img/log.png" type="image/x-icon">

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
                                    <img src="../img/ll.jpg" width="180" alt="" style="border-radius: 270px;">
                                </a>
                                <p class="text-center">ABDO SARL</p>
                                <form action="loginAuth.php" method="POST">
                                <?php if (isset($_GET['error'])) { ?>
        <p class="w-100 text-center" style="color: red;"> <?php echo $_GET['error']; ?></p>
    <?php } ?>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                    </div>
                                    <input type="submit" value="Se Connecter" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>