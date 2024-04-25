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
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="icon" href="../img/log.png" type="image/x-icon">

    <title>Dashboard Admin</title>

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
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
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
                <a class="nav-link active" aria-current="page" href="adimin.php">
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
              <li class="nav-item">
                <a class="nav-link" href="DashboardBlogActualite.php">
                  <span data-feather="bookmark"></span>
                  Blog de Actualite
                </a>
              </li>
            </ul>


          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="background-color: #f0f0f0">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>
          <div class="my-4 welcome-message text-center">
            <h2>Bienvenue dans le panneau d'administration</h2>
            <img src="../img/log.png" alt="Logo de la empresa" class="img-fluid img-thumbnail rounded-circle mb-4" style="width: 150px; height: 150px;">
            <?php
            include '../database.php';
            $userid = $_SESSION['userid'];
            $sql = "SELECT nom, prenom, email FROM users WHERE userid = $userid";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            ?>
            <?php if (isset($_GET['message'])) { ?>
              <p class="message" style="color: green;"> <?php echo $_GET['message']; ?></p>
            <?php } ?>
            <p style="font-size: 17px;"><strong class="text-primary">Utilisateur: </strong> <?php echo $row['prenom'] . " " . $row['nom']; ?></p>
            <p style="font-size: 17px;"><strong class="text-primary">E-mail: </strong> <?php echo $row['email']; ?></p>
            <p style="font-size: 17px;"><a href="modifierCompte.php" style="text-decoration: none;"><strong class="text-primary">Modifier les informations du compte</a></strong></p>
            <p style="font-size: 17px;"><a href="modifierPassword.php" style="text-decoration: none;"><strong class="text-danger">Changer le mot de passe</a></strong></p>
          </div>

          <?php
          include "../database.php";
          $sql = "SELECT count(*) FROM contact";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result)

          ?>
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="row">
                  <div class="col-lg-12 mb-5">
                    <div class="comment-area card border-0 p-5" style="height: 450px; overflow-y: auto;">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="mb-0">Messages (<?php echo $row['count(*)']; ?>)</h4>
                        <h5 class="mb-0"><a href="#" style="color: red; text-decoration: none;" onclick="deleteAll(event)">Supprimer tout</a></h5>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script>
                          function deleteAll(event) {
                            event.preventDefault(); // Prevent the default action of the anchor tag
                            $.ajax({
                              url: '../PHP/deleteAll.php',
                              type: 'POST',
                              success: function(response) {
                                window.location.reload(); // Reload the page after successful deletion
                              },
                              error: function(xhr, status, error) {
                                console.error(xhr.responseText);
                                alert('An error occurred. Please try again.'); // Display an error message to the user
                              }
                            });
                          }
                        </script>

                      </div>
                      <ul class="comment-tree list-unstyled">
                        <?php
                        include "../database.php";
                        include_once '../PHP/functions.php';
                        $sql = "SELECT * FROM contact";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <li class="mb-5">
                              <div class="comment-area-box d-flex align-items-start"> <!-- Use align-items-start to align items from the start (top) -->
                                <img alt="" src="../img/profile.png" width="50px" class="mr-3 comment-profile-img" style="margin-right: 10px;"> <!-- Image with margin-right -->
                                <div>
                                  <h5 class="mb-1"><?php echo $row['fullname'] ?></h5> <!-- Name -->
                                  <span class="date-comm">Publié <?php echo formatDate($row['datePosted']); ?></span><br>
                                  <span class="date-comm">E-mail: <a href='mailto: <?php echo $row['email']; ?>'><?php echo $row['email']; ?></a></span><br>
                                  <span class="date-comm">Telephone: <a href='tel: <?php echo $row['telephone']; ?>'><?php echo $row['telephone']; ?></a></span>
                                  <p class="mt-3 mb-0"><?php echo nl2br($row['message']); ?></p> <!-- Comment content with top margin -->
                                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete_employee" onclick="deleteMessage(<?php echo $row['contactid']; ?>)">
                                    <small>Supprimer</small>
                                  </button>
                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                  <script>
                                    function deleteMessage(contactid) {
                                      $.ajax({
                                        url: '../PHP/deleteMesage.php',
                                        type: 'POST',
                                        data: {
                                          contactid: contactid
                                        },
                                        success: function(response) {
                                          window.location.reload();
                                        },
                                        error: function(xhr, status, error) {
                                          console.error(xhr.responseText);
                                        }
                                      });
                                    }
                                  </script>
                                </div>
                              </div>
                            </li>
                        <?php
                          }
                        } else {
                          echo "<h3> Pas des message </h3>";
                        }
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 " style="height: 450px; overflow-y: auto;">
                <div class="sidebar-wrap">

                  <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="mb-0">Blogs</h4>
                      <h5 class="mb-0"><a href="#" style="color: red; text-decoration: none;" onclick="deleteAllBlogs(event)">Supprimer tout</a></h5>
                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                      <script>
                        function deleteAllBlogs(event) {
                          event.preventDefault(); // Prevent the default action of the anchor tag
                          $.ajax({
                            url: '../PHP/deleteAllBlogs.php',
                            type: 'POST',
                            success: function(response) {
                              window.location.reload(); // Reload the page after successful deletion
                            },
                            error: function(xhr, status, error) {
                              console.error(xhr.responseText);
                              alert('An error occurred. Please try again.'); // Display an error message to the user
                            }
                          });
                        }
                      </script>
                    </div>
                    <?php
                    include_once '../PHP/functions.php';
                    include '../database.php';
                    $sql = "SELECT * FROM blog ORDER BY datePublished DESC";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="media border-bottom py-3 d-flex align-items-center">
                          <!-- Image -->
                          <a href="<?php echo $row['blogid']; ?>">
                            <img class="mr-4" src="<?php echo 'data:image;base64,' . base64_encode($row['image']); ?>" alt="" width="50px" style="margin-right: 10px;" class="img-fluid rounded">
                          </a>
                          <!-- Media Body (Blog Name and Date) -->
                          <div class="media-body d-flex justify-content-between align-items-center w-100">
                            <!-- Blog Name -->
                            <div>
                              <h6 class="my-2">
                                <a href="../blogContent.php?id=<?php echo $row['blogid']; ?>"><?php echo $row['blogNom']; ?></a>
                              </h6>
                              <!-- Date Published -->
                              <span class="text-sm text-muted"><?php echo formatDate($row['datePublished']); ?></span>
                            </div>
                            <!-- Delete Button -->
                            <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#delete_employee" onclick="deleteblog(<?php echo $row['blogid']; ?>)">
                              <small>Supprimer</small>
                            </button>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                  <script>
                                    function deleteblog(blogid) {
                                      $.ajax({
                                        url: '../PHP/deleteblog.php',
                                        type: 'POST',
                                        data: {
                                          blogid: blogid
                                        },
                                        success: function(response) {
                                          window.location.reload();
                                        },
                                        error: function(xhr, status, error) {
                                          console.error(xhr.responseText);
                                        }
                                      });
                                    }
                                  </script>
                          </div>
                        </div>

                    <?php
                      }
                    } else {
                      echo "<h6><strong>Aucun blog pour le moment</strong></h6>";
                    }
                    ?>
                  </div>



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
  </body>

  </html>
<?php
} else {
  header("location: ../index.php");
}
?>