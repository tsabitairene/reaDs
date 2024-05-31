<?php
session_start();
if (!isset($_SESSION['is_admin'])) {
  header('Location: login.php');
}

include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="author" content="Untree.co" />
  <link rel="shortcut icon" href="images/50.png" />

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/fontawesome.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="fonts/icomoon/style.css" />
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />
  <link rel="stylesheet" href="css/aos.css" />
  <link rel="stylesheet" href="css/style.css" />

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
        <a href="admin.php" class="logo m-0">rea<span class="text-primary">D</span>s</a>
        <ul class="js-clone-nav d-none d-lg-inline-block site-menu d-flex">
          <li class="active">
            <a href="admin.php" style="margin-left: 150px;" class="nav-link">Home</a>
          </li>
          <li>
            <a href="#rekap-section" class="nav-link">Rekap Peminjaman</a>
          </li>
          <li>
            <a href="#update-section" class="nav-link">Update Reward</a>
          </li>
          <li>
            <a href="#tambah-section" class="nav-link">Tambah Buku</a>
          </li>
        </ul>

        <div class="d-flex align-items-center ml-auto">
          <ul class="js-clone-nav d-none d-lg-inline-block site-menu d-flex align-items-center">
          <li class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-user"></i>
              </button>
              <div class="dropdown-menu" style="border-radius: 20px; " aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="profile1.php">Profile</a>
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

  <div class="untree_co-hero pb-0" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- <div class="dots"></div> -->
          <div class="row justify-content-center">
            <!-- <div class="col-md-7 text-center mb-5">
              <h1 class="heading" data-aos="fade-up" data-aos-delay="0">Free Bootstrap 4 Landing Page for SaaS Websites <span class="d-block">by <a href="https://untree.co">Untree.co</a></span></h1>
            </div> -->
          </div>
          <div class="row align-items-center">
            <div class="col-lg-4">
              <div class="intro">
                <div class="excerpt" data-aos="fade-up" data-aos-delay="100">
                  <span class="caption">Selamat datang</span>
                  <h2 class="font-weight-bold">Admin reaDs!</h2>
                  <p>
                    Lakukan semua pekerjaan anda dengan <br />baik dan benar
                  </p>
                </div>
                <!-- /.excerpt -->
                <!-- <p data-aos="fade-up"  data-aos-delay="200">
                  <a href="#features-section" class="btn btn-primary smoothscroll mr-1">Update Reward</a>
                </p> -->
              </div>
            </div>
            <!-- /.col-lg-5 -->
            <div class="col-lg-8">
              <div class="illustration">
                <img src="images/back.png" alt="Image" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- <div class="illustration">

    </div> -->
  </div>
  <!-- /.untree_co-hero -->

  <div class="untree_co-section" id="rekap-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="0">
          <!-- <span class="caption">Features</span> -->
          <h2 class="heading">REKAP PEMINJAMAN</h2>
          <p>Data peminjaman siswa akan muncul dan bisa kamu pantau</p>
          <!-- <p>Minggu ini</p> -->
        </div>
      </div>
      <!-- /.row -->

      <div class="container mt-5">
        <div class="card">
          <div class="card-body">
            <!-- Formulir Pencarian -->
            <div class="table-responsive">
              <table class="table table-custom" data-aos="fade-up" data-aos-delay="100">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Jumlah Peminjaman</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT user.nama_lengkap as nama_user,
            count(pinjam_buku.id_user) as jumlah_pinjam
            from user inner join pinjam_buku on user.id = pinjam_buku.id_user
            group by user.nama_lengkap 
            ORDER BY jumlah_pinjam DESC;";

                  $result = $is_connect->query($sql);

                  if ($result->num_rows > 0) {
                    $no = 1; // Inisialisasi nomor urut
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . $no++ . "</td>";
                      echo "<td>" . htmlspecialchars($row['nama_user']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['jumlah_pinjam']) . "</td>";
                      echo "</tr>";
                    }
                  } else {
                    echo "<tr><td colspan='6'>Tidak ada data ditemukan.</td></tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
  </div>

  <div class="untree_co-section" id="update-section">
    <div class="container">
      <div class="row mb-5" data-aos="fade-up" data-aos-delay="0">
        <div class="col-12 text-center">
          <h2 class="heading">REKAP REWARD</h2>
          <p>
            Pantau siswa yang mendapatkan reward, kamu juga bisa
            mengupdatenya!
          </p>
        </div>
      </div>
      <!-- Tabel Rekap Reward -->
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <div class="card mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" data-aos="fade-up" data-aos-delay="100">
                  <?php
                  // Query SQL untuk mengambil nama lengkap dan hadiah dari tabel user dan reward
                  $sql = "SELECT user.nama_lengkap, reward.reward FROM reward INNER JOIN user ON user.id = reward.id_user"; // Ganti ... dengan id_user yang sesuai
                  $result = mysqli_query($is_connect, $sql);
                  // Periksa apakah ada hasil yang ditemukan
                  if (mysqli_num_rows($result) > 0) {
                    echo '<thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama Lengkap</th>
                                  <th scope="col">Reward</th>
                                </tr>
                              </thead>
                              <tbody>';
                    $counter = 1;
                    // Menampilkan data dalam tabel
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '<tr>
                                    <td>' . $counter . '</td>
                                    <td>' . $row['nama_lengkap'] . '</td>
                                    <td>' . $row['reward'] . '</td>
                                  </tr>';
                      $counter++;
                    }
                    echo '</tbody>';
                  } else {
                    // Tindakan jika tidak ada data yang ditemukan
                    echo '<tr><td colspan="3">Tidak ada data ditemukan.</td></tr>';
                  }

                  // Menutup koneksi ke database (jika diperlukan)
                  mysqli_close($is_connect);
                  ?>
                  <!-- <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Reward</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Sertifikat</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Piala</td>
                      </tr> -->
                  <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
                  <!-- </tbody> -->
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Form Update Reward -->
      <div class="row">
          <div class="col-lg-12 mx-auto">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">
                  <b>UPDATE REWARD</b>
                </h5>
                <form data-aos="fade-up" data-aos-delay="100" action="update_reward.php" method="post">
                  <div class="form-group">
                    <label for="namaLengkap">Nama Lengkap</label>
                    <input
                      type="text"
                      class="form-control"
                      id="namaLengkap"
                      name="nama_lengkap"
                      placeholder="Masukkan nama lengkap"
                    />
                  </div>
                  <div class="form-group">
                    <label for="reward">Reward</label>
                    <input
                      type="text"
                      class="form-control"
                      id="reward"
                      name="reward"
                      placeholder="Masukkan reward"
                    />
                  </div>
                  <button type="submit" class="btn btn-primary">
                    Update Reward
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>

  <div class="untree_co-section" id="tambah-section">
      <div class="container">
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="0">
          <div class="col-12 text-center">
            <!-- <span class="caption">FORM</span> -->
            <h2 class="heading">TAMBAH BUKU</h2>
            <p>Tambahkan data buku baru di formulir ini</p>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <form class="contact-form" data-aos="fade-up" data-aos-delay="100" action="tambah_buku.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label class="" for="fname">Judul Buku</label>
                        <input type="text" class="form-control" id="fname" name="judul_buku"/>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label class="" for="lname">Upload Gambar</label>
                        <input type="file" class="form-control" id="lname" name="gambar"/>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="" for="message">Deskripsi Buku</label>
                    <textarea
                      name="deskripsi"
                      class="form-control"
                      id="message"
                      cols="30"
                      rows="5"
                    ></textarea>
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <div class="form-group">
                        <label class="" for="lname">Kategori</label>
                        <select class="form-control" id="fname" name="kategori">
                          <option value="" disabled selected></option>
                          <option value="fiksi remaja">Fiksi Remaja</option>
                          <option value="majalah">Majalah</option>
                          <option value="cerita_anak">Cerita Anak</option>
                          <option value="pendidikan">Pendidikan</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label class="" for="lname">Tersedia</label>
                        <input type="number" class="form-control" id="lname" name="tersedia" />
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label class="" for="lname">Lokasi Buku</label>
                        <input type="text" class="form-control" id="lname" name="lokasi_buku" />
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary">
                    TAMBAH BUKU
                  </button>
                </form>
              </div>
            </div>
          </div>
          <!-- /.col-lg-8 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
  </form>

  <!-- /.untree_co-section bg-light -->

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
          <p class="copyright"><a href="index.php">reaDs</a> &copy;<script>
              document.write(new Date().getFullYear());
            </script>. All Rights Reserved. &mdash; Designed with love by Kelompok 7 <!-- License information: https://untree.co/license/ -->
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