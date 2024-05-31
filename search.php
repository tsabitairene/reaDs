<?php
// Database connection
include('connect.php');

// Get search keyword from GET request
$keyword = isset($_GET['cari']) ? $_GET['cari'] : '';

// Prepare SQL query based on the presence of keyword
if ($keyword) {
    $sql = "SELECT * FROM buku WHERE judul_buku LIKE ? OR kategori LIKE ?";
    $param = "%$keyword%";
    $stmt = $is_connect->prepare($sql);
    $stmt->bind_param("ss", $param, $param);
} else {
    $sql = "SELECT * FROM buku";
    $stmt = $is_connect->prepare($sql);
}

$stmt->execute();
$result = $stmt->get_result();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="images/50.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>


  <title>reaDs</title>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>



  <nav class="site-nav dark js-site-navbar mb-5 site-navbar-target">
    <div class="container">
        <div class="site-navigation d-flex align-items-center justify-content-between">
          <a href="index.html" class="logo m-0">rea<span class="text-primary">D</span>s</a>
            <ul class="js-clone-nav d-none d-lg-inline-block site-menu d-flex">
                <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="has-children">
                    <a href="#" class="nav-link">Kategori</a>
                    <ul class="dropdown">
                        <li><a href="category.php?kategori=pendidikan" class="nav-link">Pendidikan</a></li>
                        <li><a href="category.php?kategori=fiksi remaja" class="nav-link">Fiksi Remaja</a></li>
                        <li><a href="category.php?kategori=cerita anak" class="nav-link">Cerita Anak</a></li>
                        <li><a href="category.php?kategori=majalah" class="nav-link">Majalah</a></li>
                    </ul>
                </li>
                <li><a href="#features-section" class="nav-link">History</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
            </ul>

            <div class="d-flex align-items-center ml-auto">
                <form id="search" action="#" class="search-input d-flex align-items-center mr-4">
                    <input type="text" placeholder="Cari Buku" id='searchText' name="searchKeyword" onkeypress="handle" />
                    <i class="fa-solid fa-magnifying-glass"></i>
                </form>
                
                <ul class="js-clone-nav d-none d-lg-inline-block site-menu d-flex align-items-center">
                    <li class="mr-3">
                        <img src="images/badge.png" alt="">
                    </li>
                    <li class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a href="logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>

            <a href="#" class="burger ml-auto site-menu-toggle js-menu-toggle d-inline-block dark d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>
        </div>
    </div>
  </nav>

  <div class="untree_co-section">
    <div class="container">
      <div class="row">
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section">
    <div class="container">

      <div class="row mb-5">
        <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="0">
          <!-- <span class="caption">Features</span> -->
          <h2 class="heading">hasil search dari : <?php echo htmlspecialchars($keyword); ?></h2>
          <!-- <p>Minggu ini</p> -->
        </div>
      </div> <!-- /.row -->

    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->

  <div class="card-container">
    <?php while($row = $result->fetch_assoc()): ?>
      <div class="card" style="width: 10rem; border: 1px solid #ccc; border-radius: 20px;">
        <img src="img/<?php echo $row['gambar']; ?>" class="card-img-top" alt="..." style="height: 250px; width: 100%;">
        <div class="card-body d-flex flex-column">
          <div class="mb-auto">
              <span class="caption"><?php echo $row['kategori']; ?></span>
              <h5 class="card-title"><?php echo $row['judul_buku']; ?></h5>
          </div>
          <a href="detail.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" style="display: grid; place-items: center;">Detail</a>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
        
  <?php
  // Close statement and connection
  $stmt->close();
  $is_connect->close();
  ?>

        
    <div class="untree_co-section">
        <div class="container">
        <div class="row">
        </div> <!-- /.container -->
    </div> <!-- /.untree_co-section -->

    <div class="site-footer">

    <div class="footer-dots"></div> <!-- /.footer-dots -->
    <div class="container">

      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <a href="index.html" class="logo m-0">rea<span class="text-primary">D</span>s</a>
            <p>Aplikasi pinjam buku yang menarik.</p>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>Follow Us</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-2 ml-auto">
          <div class="widget">
            <!-- <h3>Projects</h3> -->
            <ul class="list-unstyled float-left links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Kategori</a></li>
              <li><a href="#">History</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-2">
          <div class="widget">
            <!-- <h3>Services</h3> -->
            <ul class="list-unstyled float-left links">
              <li><a href="#">Built for Developers</a></li>
              <li><a href="#">Modern Design</a></li>
              <li><a href="#">Building Stunning Websites</a></li>
              <li><a href="#">Bring Ideas To Life</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->


        <div class="col-lg-3">
          <div class="widget">
            <!-- <h3></h3> -->
            <address>SMK Negeri 2 Depok</address>
            <ul class="list-unstyled links mb-4">
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="mailto:info@mydomain.com">reads@gmail.com</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> <!-- License information: https://untree.co/license/ -->
          </p>
        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.site-footer -->

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/aos.js"></script>
  
  <script src="js/custom.js"></script>
  
</body>

</html>