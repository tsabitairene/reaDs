<?php
// Database connection
include('connect.php');

session_start(); //menjalankan session

if(!isset($_SESSION['id'])) {
  header('Location:login.php');
  exit();
}

// 2.membuat query sesuai kebutuhan
$query = "SELECT buku.judul_buku, buku.kategori, buku.gambar,
          pinjam_buku.tanggal_kembali, pinjam_buku.is_approved
          FROM buku INNER JOIN pinjam_buku on buku.id = pinjam_buku.id_buku 
          WHERE id_user = ".$_SESSION['id']."
          ORDER BY tanggal_pinjam DESC;";

// 3.menjalankan query
$result = mysqli_query($is_connect, $query);
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
        <a href="index.php" class="logo m-0" style="padding: 20px;">rea<span class="text-primary">D</span>s</a>
        <ul class="js-clone-nav d-none d-lg-inline-block site-menu d-flex">
          <li class="active" style="margin-left: 100px;"><a href="index.php" class="nav-link">Home</a></li>
          <li class="has-children">
            <a href="#" class="nav-link">Kategori</a>
            <ul class="dropdown">
              <li><a href="category.php?kategori=pendidikan" class="nav-link">Pendidikan</a></li>
              <li><a href="category.php?kategori=fiksi remaja" class="nav-link">Fiksi Remaja</a></li>
              <li><a href="category.php?kategori=cerita anak" class="nav-link">Cerita Anak</a></li>
              <li><a href="category.php?kategori=majalah" class="nav-link">Majalah</a></li>
            </ul>
          </li>
          <li><a href="history.php" class="nav-link">History</a></li>
        </ul>

        <div class="d-flex align-items-center ml-auto">
                <!-- Search Form -->
                <form id="search" action="search.php" method="GET" class="search-input d-flex align-items-center mr-4" style="position: relative;">
                  <input type="text" placeholder="cari buku" id='searchText' name="cari" style="padding-left: 20px;" />
                  <button type="submit" name="search" style="border: none; background: none;"><i class="fa-solid fa-magnifying-glass" style="color:black; position: absolute; right: 55px; top: 50%; transform: translateY(-50%);"></i></button>
                </form>

                <ul class="js-clone-nav d-none d-lg-inline-block site-menu d-flex align-items-center">
                    <li class="mr-3">
                        <img src="images/badge.png" alt="">
                    </li>
                    <li class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </button>
                        <div class="dropdown-menu" style="border-radius: 20px; " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="profile.php">Profile</a>
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
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section">
    <div class="container">

      <div class="row mb-5">
        <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="0">
          <!-- <span class="caption">Features</span> -->
          <h2 class="heading">History Peminjaman</h2>
          <!-- <p>Minggu ini</p> -->
        </div>
      </div> <!-- /.row -->

    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->

  <div class="container pb-5 mb-5 border-bottom">
  <div class="row">
        <?php
        $count = 1; // Inisialisasi variabel penghitung
        $total_rows = $result->num_rows; // Mendapatkan jumlah total baris
        
        while($row = $result->fetch_assoc()): ?>
            <div class="col-lg-12">
                <h1 class="h6 mb-3 text-black">Peminjaman <?php echo $total_rows + 1 - $count; ?></h1>
            </div>
            <div class="col-lg-12 mb-3">
                <div class="card p-3 shadow-lg" style="width: 100%; border: 1px solid #ccc; border-radius: 20px; background-color: #5ea1ee;">
                    <div class="d-flex">
                        <img src="img/<?php echo $row['gambar']; ?>" class="card-img-left me-3" alt="..." style="width: 150px; height: 150px; object-fit: cover; border-radius: 20px 0 0 20px;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-3" style="color:white;"><?php echo $row['judul_buku']; ?></h5>
                            <span class="caption mb-3" style="color:#ffffcc;"><?php echo $row['kategori']; ?></span>
                            <p class="card-text">
                                Status: <?php echo ($row['is_approved'] == 2) ? 'Dikembalikan' : 'Belum Dikembalikan'; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $count++; // Inkrementasi variabel penghitung
        endwhile; ?>
    </div>
</div>




        
    <div class="untree_co-section">
      <div class="container">
        <div class="row">
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.untree_co-section -->

    <div class="site-footer">

      <div class="footer-dots"></div> <!-- /.footer-dots -->
      <div class="container">
  
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <a href="index.php" class="logo m-0">rea<span class="text-primary">D</span>s</a>
              <p>Bersama reaDs, pinjam buku menjadi lebih seru dan menyenangkan.</p>
            </div> <!-- /.widget -->
            <div class="widget">
              <h3>Follow Us</h3>
              <ul class="list-unstyled social">
                <li><a href="https://www.instagram.com/stembayolib"><span class="icon-instagram"></span></a></li>
                <!-- <li><a href="#"><span class="icon-twitter"></span></a></li> -->
                <li><a href="https://www.facebook.com/stembayolover"><span class="icon-facebook"></span></a></li>
                <li><a href="https://www.linkedin.com/school/smk-n-2-depok-sleman-yogyakarta/"><span class="icon-linkedin"></span></a></li>
                <!-- <li><a href="#"><span class="icon-pinterest"></span></a></li> -->
                <!-- <li><a href="#"><span class="icon-dribbble"></span></a></li> -->
              </ul>
            </div> <!-- /.widget -->
          </div> <!-- /.col-lg-3 -->
  
          <div class="col-lg-2 ml-auto">
            <div class="widget">
              <h3>Page</h3>
              <ul class="list-unstyled float-left links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Kategori</a></li>
                <li><a href="#">History</a></li>
              </ul>
            </div> <!-- /.widget -->
          </div> <!-- /.col-lg-3 -->
  
          <div class="col-lg-2">
            <div class="widget">
              <h3>Services</h3>
              <ul class="list-unstyled float-left links">
                <li><a href="#">Discover</a></li>
                <li><a href="#">Borrow</a></li>
                <li><a href="#">Read</a></li>
                <li><a href="#">Your Gateway to Knowledge!</a></li>
              </ul>
            </div> <!-- /.widget -->
          </div> <!-- /.col-lg-3 -->
  
  
          <div class="col-lg-3">
            <div class="widget">
              <!-- <h3></h3> -->
              <address><a href="https://maps.app.goo.gl/qx5d234AWkCP7vGz5">Jl. STM Pembangunan, Mrican, Caturtunggal, Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</a></address>
              <ul class="list-unstyled links mb-4">
                <li><a href="tel://11234567890">0274 - 513515</a></li>
                <!-- <li><a href="tel://11234567890">+1(123)-456-7890</a></li> -->
                <li><a href="mailto:info@mydomain.com">reads@gmail.com</a></li>
              </ul>
            </div> <!-- /.widget -->
          </div> <!-- /.col-lg-3 -->
  
        </div> <!-- /.row -->
  
        <div class="row mt-5">
          <div class="col-12 text-center">
            <p class="copyright"><a href="index.php">reaDs</a> &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by Kelompok 7 <!-- License information: https://untree.co/license/ -->
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