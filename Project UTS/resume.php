<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Resume - Gabriel Davinche Manalu</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="resume-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <h3 class="sitename">Gabriel Davinche Manalu</h3>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="resume.php" class="active">Resume</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">
    
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">Education</h3>
          <?php
             $strSQL ="SELECT jenis_pendidikan, waktu_pendidikan, instansi_pendidikan, nilai FROM pendidikan";
             $execStrSQL = mysqli_query($conn, $strSQL);

             if (mysqli_num_rows($execStrSQL) > 0 ){
              while ($row = mysqli_fetch_assoc($execStrSQL)){
          ?>
          
            <div class="resume-item">
              <h4><?= $row["jenis_pendidikan"] ?></h4>
              <h5><?= $row["waktu_pendidikan"] ?></h5>
              <p><em><?= $row["instansi_pendidikan"] ?></em></p>
              <p> Nilai Ijazah : <?= $row["nilai"] ?>  </p>
            </div><!-- Edn Resume Item -->
            <?php
              }
            }
            ?>
            
          </div>
          

          

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Experience</h3>

            <?php
             $strSQL ="SELECT nama_pengalaman, waktu_pengalaman, lokasi_pengalaman, deskripsi_pengalaman FROM pengalaman";
             $execStrSQL = mysqli_query($conn, $strSQL);

             if (mysqli_num_rows($execStrSQL) > 0 ){
              while ($row = mysqli_fetch_assoc($execStrSQL)){
            ?>
            <div class="resume-item">
              <h4><?= $row["nama_pengalaman"] ?></h4>
              <h5><?= $row["waktu_pengalaman"] ?></h5>
              <p><em><?= $row["lokasi_pengalaman"] ?></em></p>
              <ul>
                <p>
                <?= $row["deskripsi_pengalaman"]?>
                </p>
              </ul>
            </div><!-- Edn Resume Item -->
            <?php
              }
            }
            ?>
          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>