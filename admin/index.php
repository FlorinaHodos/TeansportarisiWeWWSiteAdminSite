<?php
include 'sesiune.php';
$index_active = ' class="active"';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center" style="background-image: url('../assets/img/page-header.jpg');">
  <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-10 text-center">
          <h3 >ADMIN-Transportarisi</h3><br>
          <h4 data-aos-delay="100">Aplicație web destinată gestionării bazei de date a site-ului</h4><br>
          <div class="<?= $display_btcon ?>">
              <a href="logare.php" class="btn btn-primary"">Conectare</a>
          </div>
          <div class="<?= $display_btdecon ?>">
              <a href="delogare.php" class="btn btn-primary">Deconectare</a>
          </div>
        </div>
    </div>
  </div>
  </section><!-- End Hero Section -->

  <main id="main">


  </main><!-- End #main -->
</body>
</html>