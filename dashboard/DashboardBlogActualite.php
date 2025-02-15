<?php
session_start();
if (isset($_SESSION['userid']) && isset($_SESSION['email'])) {

?>
  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="paulino nze, siabonga">
    <meta name="generator" content="Hugo 0.84.0">
    <title>sté B2B2C ABDO</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">sté B2B2C ABDO</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="../PHP/logout.php">Sign out</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="adimin.php">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboarServices/DashboardService.php">
                  <span data-feather="briefcase"></span>
                  Services
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="DashboardBlogActualite.php">
                  <span data-feather="bookmark"></span>
                  Blog de Actualite
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="equipeDirective/equipeDirective.php">
                  <span data-feather="user"></span>
                  Equipe directive
                </a>
              </li>
            </ul>


          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Blog de Actualite</h1>
          </div>
          <div class="my-4">
            <!-- Contenido del nuevo div -->
            <?php if (isset($_GET['message'])) { ?>
              <h2 class="message" style="color: green;"> <?php echo $_GET['message']; ?></h2>
            <?php } ?>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <form action="../PHP/ajoutblog.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Nom du blog</label>
                        <input type="text" class="form-control" name="title" required>
                      </div>
                      <div class="form-group">
                        <label>Image du blog</label>
                        <input type="file" name="image" class="form-control">
                        <small class="form-text text-muted">Max. taille du fichier : 50 Mo. Images autorisées : jpg, gif, png. </small>
                      </div>
                      <div class="form-group">
                        <label for="description">Description du blog (Max 35 mots)</label>
                        <textarea id="description" name="description" class="form-control" cols="30" rows="10" oninput="countWords()" required style="height: 100px;"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="description">Lien</label><small> (Ne supprimez pas http://)</small>
                        <input type="text" class="form-control" name="link" value="http://">
                      </div>
                      <script>
                        function countWords() {
                          var textarea = document.getElementById("description");
                          var wordCount = textarea.value.trim().split(/\s+/).length;

                          // Check if word count exceeds 35
                          if (wordCount > 35) {
                            alert("Maximum 35 words allowed.");
                            // Trim the excess words
                            var words = textarea.value.trim().split(/\s+/).slice(0, 35).join(" ");
                            textarea.value = words;
                          }
                        }
                      </script>
                      <div class="form-group">
                        <label>contenu du blog</label>
                        <textarea name="content" class="form-control" cols="30" rows="10" required></textarea>
                      </div>

                      <div class="m-t-20 text-center">
                        <button class="btn btn-primary btn-lg" type="submit" name="submit">Publier le blog</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script>
    feather.replace();
  </script>
  </body>

  </html>
<?php
} else {
  header("location: ../index.php");
}
