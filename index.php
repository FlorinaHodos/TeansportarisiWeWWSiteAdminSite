<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Logis Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis - v1.3.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top" style="background: var(--color-secondary)">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Transportarisi</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Acasă</a></li>
          <li><a href="despre.php">Despre</a></li>
          <li><a href="servicii.php">Servicii</a></li>
          <li><a href="preturi.php">Preţuri</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
  <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-10 text-center">
          <h3 data-aos="fade-up">Cu toții avem nevoie de parteneri de încredere</h3>
          <p data-aos="fade-up" data-aos-delay="100">Transportul este o activitate care a apărut odată cu existența omului. Limitele fizice ale organismului uman în privința distanțelor ce puteau fi parcurse pe jos și a cantității de bunuri ce puteau fi transportate, au determinat, în timp, descoperirea unei game variate de căi și mijloace de transport.</p>
        </div>


      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

       <!-- ======= About Us Section ======= -->
       <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets\img\client_1.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=CHSnz0bCaUk" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last ">

            <h3>Despre noi</h3>

            <p>
            Transportul terestru este cea mai răspândită formă de transport. Oamenii pot să se deplaseze prin propriile forțe sau cu ajutorul unor mijloace de transport ce folosesc forța umană, cum ar fi bicicleta, sau pot folosi tracțiunea animală, pentru a tracta căruțe sau alte tipuri de atelaje. Cea mai răspândită și eficientă formă de transport terestru folosește vehicule dotate cu motoare alimentate cu combustibil lichid.
            </p>

            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Pasionaţi de munca pe care o depunem</h5>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Ambiţioşi și motivaţi</h5>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Comunicatori excelenţi</h5>
                </div>
              </li>
            </ul>
          </?div>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Servicii</h2>

        </div>

        <div class="row gy-4">

        <?php include 'conect.php';
        //  Creez multimea de selectie
        $interogare = "SELECT * from servicii";
        $evnm = mysqli_query($cnx, $interogare) or die("Eroare: " . mysqli_error($cnx));
        ?>
        <?php while($articol = mysqli_fetch_assoc($evnm)): ?>


          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/<?= $articol['imagine'] ?>" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.php?codproiect=<?= $articol['id'] ?>" class="stretched-link"> <?= $articol['titlu_serviciu'] ?></a></h3>

              <p><?= $articol['descriere_serviciu'] ?></p>
            </div>
          </div><!-- End Card Item -->

        <?php endwhile; ?>
        </div>

      </div>
    </section><!-- End Services Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.php" class="logo d-flex align-items-center">
            <span>Transportarisi</span>
          </a>
          <p>Crearea de condiţii optime de dezvoltare pentru partenerii noştri prin oferirea unor soluţii integrate profesioniste, de calitate şi sustenabile.</p>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Link-uri rapide</h4>
          <ul>
            <li><a href="#">Acasă</a></li>
            <li><a href="#">Despre</a></li>
            <li><a href="#">Servicii</a></li>
            <li><a href="#">Politica de cookies</a></li>
            <li><a href="#">Politica de confidențialitate</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Servicii</h4>
          <ul>
            <li><a href="#">Transport persoane</a></li>
            <li><a href="#">Transport marfă</a></li>
            <li><a href="#">Închiriază un autovehicul</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact</h4>
          <p>
          Strada Mihai Eminescu, nr 85 <br>
          Turda, judeţul Cluj<br>
          Romania <br><br>
            <strong>Telefon:</strong> 0744 000 111<br>
            <strong>Email:</strong> transportarisi@trans.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  </main><!-- End #main -->
</body>

</html>