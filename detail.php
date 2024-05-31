<?php
// Database connection
include('connect.php');

session_start(); // Menjalankan session

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

$id_buku = $_GET['id'];
$id_user = $_SESSION['id'];

// Pastikan $id_buku dan $id_user adalah integer untuk menghindari SQL injection
$id_buku = (int)$id_buku;
$id_user = (int)$id_user;

// Query untuk mengambil data buku dan informasi peminjaman
$query = "SELECT buku.*, 
          IFNULL(pinjam_buku.is_approved, 0) as is_approve 
          FROM buku 
          LEFT JOIN pinjam_buku 
          ON buku.id = pinjam_buku.id_buku 
          AND pinjam_buku.id_user = $id_user 
          AND pinjam_buku.is_approved = 1 
          WHERE buku.id = $id_buku";

$result = mysqli_query($is_connect, $query);

if (!$result) {
    echo "Query gagal: " . mysqli_error($is_connect);
    exit();
}

$row = mysqli_fetch_assoc($result);

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
                <div class="col-12 mb-5 text-center" data-aos="fade-up">
                <?php
                  if (!$row) {
                      echo "Buku tidak ditemukan.";
                  } else {
                      echo "<div class='card mb-5' style='max-width: 1200px; border: none;'>";
                      echo "<div class='row g-0'>";
                      echo "<div class='col-md-4'>";
                      echo "<img src='img/" . $row['gambar'] . "' class='img-fluid rounded-start' style='border-radius: 10px; margin: 10px;' alt='...'>";
                      echo "</div>";
                      echo "<div class='col-md-8'>";
                      echo "<div class='card-body' style='text-align: left;'>";
                      echo "<h5 class='card-title'>" . $row['judul_buku'] . "</h5>";
                      echo "<p class='card-text'><small class='text-muted'>" . $row['status'] . "</small></p>";
                      echo "<p class='card-text' style='text-align: justify;'>" . $row['deskripsi'] . "</p>";

                      // Tombol pinjam/kembalikan buku berdasarkan status is_approve
                      if ($row['is_approve'] == 1) { // Buku sedang dipinjam
                          echo "<form action='kembalikan_buku.php' method='POST'>";
                          echo "<input type='hidden' name='id_buku' value='" . $row['id'] . "'>";
                          echo "<button type='submit' class='btn btn-danger' style='border-radius: 20px;'>Kembalikan Buku</button>";
                          echo "</form>";
                      } else { // Buku tersedia untuk dipinjam
                          echo "<form action='pinjam_buku.php' method='POST'>";
                          echo "<input type='hidden' name='id_buku' value='" . $row['id'] . "'>";
                          echo "<button type='submit' class='btn btn-primary' style='border-radius: 20px;'>Pinjam Buku</button>";
                          echo "</form>";
                      }

                      echo "</div>";
                      echo "</div>";
                      echo "</div>";
                      echo "</div>";
                  }
                  $is_connect->close();
                  ?>
            </div>
            </div>

            <?php
        echo '
        <div class="comment-section" style="margin-top: 10rem;">
            <span>Comment</span>
            <div id="comments">
                <form action="tambah_komentar.php" method="post">
                    <textarea class="form-control mt-3" name="komentar" style="border-radius: 20px;" id="comment-input" placeholder="Tulis komentar"></textarea>
                    <button class="btn btn-primary mt-3" type="submit">Kirim</button>
                    <input type="hidden" name="id_buku" value="' . $row['id'] . '">
                    <input type="hidden" name="id_user" value="1"> <!-- Ubah ID user sesuai dengan ID user yang sedang login -->
                </form>
            </div>
        </div>';
        ?>

        <div class="mt-5">
            <h3>Semua Komentar</h3>
            <div id="comments-section">
                <?php
                include('connect.php');

                // Check connection
                if ($is_connect->connect_error) {
                    die("Connection failed: " . $is_connect->connect_error);
                }

                // Pastikan $_GET['id'] ada sebelum mengaksesnya
                if (isset($_GET['id'])) {
                    $id_buku = intval($_GET['id']);
                    $id_user = isset($_SESSION['id']) ? intval($_SESSION['id']) : 0; // Pastikan $_SESSION['id'] ada sebelum mengaksesnya

                    // Query untuk mengambil data buku dan informasi peminjaman
                    $sql = "SELECT user.username, review.komentar 
                            FROM review 
                            INNER JOIN user ON user.id = review.id_user 
                            WHERE review.id_buku = $id_buku";

                    $hasil = mysqli_query($is_connect, $sql);

                    if (!$hasil) {
                        echo "Query gagal: " . mysqli_error($is_connect);
                        exit();
                    }

                    if (mysqli_num_rows($hasil) > 0) {
                        while ($row = mysqli_fetch_assoc($hasil)) {
                            echo '<div class="card mb-3" style="border: none;">
                                    <div class="card-body">
                                      <div class="custom-box" data-aos="fade-up" data-aos-delay="0">
                                        <h5 class="card-title"><span>' . htmlspecialchars($row["username"]) . '</span></h5>
                                        <p class="card-text">' . htmlspecialchars($row["komentar"]) . '</p>
                                      </div>
                                    </div>
                                  </div>';
                        }
                    } else {
                        echo '<div class="card mb-3">
                                <div class="card-body">
                                    <p class="card-text">Belum ada komentar</p>
                                </div>
                              </div>';
                    }
                } else {
                    echo '<div class="card mb-3">
                            <div class="card-body">
                                <p class="card-text">Invalid book ID</p>
                            </div>
                          </div>';
                }

                $is_connect->close();
                ?>
            </div>
        </div>

        </div> <!-- /.container -->
    </div> <!-- /.untree_co-section -->

    <script>
        document.getElementById("toggleButton").addEventListener("click", function() {
            if (this.textContent === "Pinjam buku") {
                this.textContent = "Kembalikan buku";
            } else {
                this.textContent = "Pinjam buku";
            }
        });
        function addComment() {
            const commentInput = document.getElementById('comment-input');
            const commentText = commentInput.value.trim();

            if (commentText) {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "add_comment.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        loadComments(); // Reload comments after adding a new one
                        commentInput.value = '';
                    }
                };
                const params = `comment=${commentText}&id_buku=1&id_user=1`; // Example values
                xhr.send(params);
            }
        }

        function loadComments() {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "get_comments.php?id_buku=1", true); // Example book ID
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById('comments-section').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }

        // Load comments when the page loads
        window.onload = function() {
            loadComments();
        };
    </script>

  
              </div> <!-- /.untree_co-testimonial -->
            </div>
              </div> <!-- /.untree_co-testimonial -->
            </div>
          </div>
        </div>
      </div> <!-- /.row -->    
    </div> <!-- /.container -->  
  </div> 
  
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
          <p class="copyright">reaDs &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> <!-- License information: https://untree.co/license/ -->
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