<?php
session_start();
if (isset($_SESSION['userid']) && isset($_SESSION['email'])) {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ABDO SARL</title>
        <link rel="shortcut icon" type="image/png" href="../img/log.png" />
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
                                        <img src="../img/log.png" width="180" alt="">
                                    </a>
                                    <p class="text-center"> B2B2C ABDO SARL</p>
                                    <form action="../PHP/modifierPassword.php" method="POST">
                                        <?php if (isset($_GET['error'])) { ?>
                                            <p class="w-100 text-center" style="color: red;"> <?php echo $_GET['error']; ?></p>
                                        <?php } ?>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Mot de passe</label>
                                            <input type="password" class="form-control" id="password" aria-describedby="emailHelp" name="password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Confirmez le mot de passe</label>
                                            <input type="password" class="form-control" id="confirmPassword" aria-describedby="emailHelp" name="cPassword">
                                            <small id="passwordMismatch" class="form-text text-danger" style="display: none;">Les mots de passe ne correspondent pas</small>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    var passwordInput = document.getElementById('password');
                                                    var confirmPasswordInput = document.getElementById('confirmPassword');
                                                    var passwordMismatchText = document.getElementById('passwordMismatch');
                                                    var passwordRequirementsText = document.getElementById('passwordRequirements');

                                                    confirmPasswordInput.addEventListener('input', function() {
                                                        if (passwordInput.value !== confirmPasswordInput.value) {
                                                            passwordMismatchText.style.display = 'block';
                                                        } else {
                                                            passwordMismatchText.style.display = 'none';
                                                        }
                                                    });

                                                    passwordInput.addEventListener('input', function() {
                                                        var password = passwordInput.value;
                                                        var hasUpperCase = /[A-Z]/.test(password);
                                                        var hasNumber = /\d/.test(password);
                                                        var hasSpecialChar = /[-_\/]/.test(password);
                                                        var isValidLength = password.length >= 8;

                                                        if (hasUpperCase && hasNumber && hasSpecialChar && isValidLength) {
                                                            passwordRequirementsText.style.display = 'none';
                                                        } else {
                                                            passwordRequirementsText.style.display = 'block';
                                                        }
                                                    });
                                                });
                                            </script>
                                        </div>
                                        <input type="hidden" name="userid" value="<?php echo $_SESSION['userid']; ?>">
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