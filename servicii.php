<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Logis Bootstrap Template - Services</title>
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
          <li><a href="index.php">Acasă</a></li>
          <li><a href="despre.php">Despre</a></li>
          <li><a href="servicii.php" class="active">Servicii</a></li>
          <li><a href="preturi.php">Preţuri</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Servicii</h2>
              <p>Zi de zi, mergem mai departe.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Acasă</a></li>
            <li>Servicii</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

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

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
    <div class="section-header">
          <h2>Clienți fericiți</h2>
      <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

          <div class="col-md-5">
            <img src="assets/img/inchi_micro.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Cel mai serios şi de încredere transportator pe care l-am cunoscut vreo dată.</h3>
            <ul>
              <li><i class="bi bi-check"></i> Ofertă de preţ foarte bună pentru o asemenea distanţă.</li>
              <li><i class="bi bi-check"></i> Răspund foarte repede la mesaje şi miau oferit răspunsuri concrete la toate întrebările. </li>
              <li><i class="bi bi-check"></i> Un preţ foarte decent pentru serviciile oferite.</li>

            </ul>
            <p>George din Luna</p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/client_1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Seriozitate maximă. Recomand cu căldură.</h3>
            <p class="fst-italic">
            "Am făcut înainte apel şi la alte firme, însă dânșii m-au impresionat prin profesionalism. Grijă deosebită pentru clienţi, preţ foarte corect, relaţie excelentă cu clientul, punctualitate, pe viitor voi apela doar la ei."
            </p>
            <p>Loredana din Cluj</p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/client_2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Prompţi și eficienţi</h3>
            <p>De 4 ani apelez doar la Transportarisi când am nevoie de transport. De fiecare dată au fost receptivi şi au venit în regim de urgenţă când a fost cazul.</p>
            <p>Vasile din Mures</p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/client_3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Cu siguranță voi mai apela și voi recomanda mai departe serviciul.</h3>
            <p class="fst-italic">
            Super seriozitate, punctualitate. Servicii de 5 stele şi omenie la cote maxime! Recomand cu maximă căldură!!!
            </p>
            <p>Florin din Turda</p>
          </div>
        </div><!-- Features Item -->

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Întrebări frecvente</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    Care sunt criteriile prin care se calculează costul transportului?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  <ul>
                  <li>Distanță</li>
                  <li>Tonaj</li>
                  <li>Dimensiuni</li>
                  <li>Timp de tranzit</li>
                  <li>Taxe de drum pe ruta</li>
                  <li>Autorizații (dacă se impune)</li>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    Cum verific o companie de transport?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Orice companie de transport trebuie să aibă Licență de Transport eliberată de Autoritatea Rutieră Română ( sau de autoritatea competență din țara în care are firma sediul) și Asigurare CMR de răspundere pentru marfă. Pe lângă acestea, va trebui să lucrați sub un contract/comandă de transport pentru siguranță sporită.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    Cum verific dacă marfa este asigurată pe durata transportului?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Fiecare camion are obligatoriu prin lege Asigurare CMR de răspundere pentru marfă pe care o puteți solicitata de fiecare dată când contractați un transport.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    Ce este un formular CMR și cum îl completez?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    Formularul CMR este o scrisoare de trăsura. Este documentul pregătit de expeditor care atestă că marfa s-a livrat destinatarului. Datele cuprinse în scrisoarea CMR sunt: expeditorul, destinatarul, documentele însoțitoare, tipul și cantitatea mărfurilor transportate, numărul de înmatriculare al autovehiculului și transportatorul. Aceste date trebuie completate corect în scrisoarea de trăsura. CMR-ul se întocmește trei exemplare originale, dintre care unul (dovada primirii) este pentru expeditor, cel de al doilea este pentru transportator, iar cel de al treilea este pentru destinatar (dovada livrării).
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    De ce să ne alegeți?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Suntem o companie sigură și motivată să vă ajutăm. Echipa noastră vă oferă servicii de cea mai înaltă calitate. Pentru noi DUMNEAVOASTRĂ sunteți cel mai important.
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

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
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
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

</body>

</html>