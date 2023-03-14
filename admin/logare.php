<?php
include 'sesiune.php';
$index_active = ' class="active"';
include 'header.php';
?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center" style="background-image: url('../assets/img/page-header.jpg');">
  <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-10 text-center">
          <h3 >ADMIN-Transportarisi</h3><br>
          <h4 data-aos-delay="100">Aplicație web destinată gestionării bazei de date a site-ului</h4><br>
        </div>
    </div>
  </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <div class="container" style="padding-top: 50px;">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 text-center">
        <h2>Conectare la baza de date</h2>
      </div>
      <div class="form-group row" style="width: 500px;">
        <form action="formulare/logare.php" method="post">
          <div class="form-row">
          <div class="col-sm-7 input-group mb-3">
              <input type="text" name="nume" class="form-control" id="nume" placeholder="Numele">
            </div>
            <div class="col-sm-7 input-group mb-3">
              <input type="password" class="form-control" name="parola" id="parola" placeholder="Parola">
            </div>
          </div>
          <div class="text-center"><button type="submit" class="btn btn-primary">Login</button></div>
        </form>
      </div>
    </div>
</div>
  </main><!-- End #main -->
</body>
</html>