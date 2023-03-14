<?php 
include 'sesiune.php';
$functii_active = ' class="active"';
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
      <div class="container">
        <h2 class="text-center" style="padding-top: 120px;">Tabelul <em>servicii</em></h2>
      </div>
      <div class="container" style="width:1200px;">
        <table class="table mt-5" style="border-bottom: 2px solid #DEE2E6">
          <thead>
            <tr>
              <th scope="col">Nr. crt.</th>
              <th scope="col">Imagine</th>
              <th scope="col">Titlu_serviciu</th>
              <th scope="col">Descriere_serviciu</th>
              <th scope="col">Titlu_detalii</th>
              <th scope="col">Detalii</th>
              <th scope="col" class="text-center">Editare/Sterge</th>
            </tr>
          </thead>
          <tbody>
<?php
  $interogare = "SELECT * FROM servicii ORDER BY titlu_serviciu";
  $linii = mysqli_query($cnx, $interogare) or die("Eroare: " . mysqli_error($cnx));
  $i = 1;  //  $i este un contor care va fi incrementat în ciclul while
  while($rez = mysqli_fetch_assoc($linii)):
?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td class="w-70"><?= $rez['imagine'] ?></td>
              <td class="w-70"><?= $rez['titlu_serviciu'] ?></td>
              <td class="w-70"><?= $rez['descriere_serviciu'] ?></td>
              <td class="w-70"><?= $rez['titlu_detalii'] ?></td>
              <td class="w-70"><?= $rez['detalii'] ?></td>
              <td class="w-30 text-center">
                <a href="editserviciu.php?editez=<?= $rez['id'] ?>">
                  <i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                <a href="formulare/stergserviciu.php?sterg=<?= $rez['id'] ?>">
                  <i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
              </td>
            </tr>
<?php
  $i++;
  endwhile;
?>
          </tbody>
        </table>
      </div>
<?php
  //  Caut functia care trebuie editata
  $editez = $_GET["editez"];
  $caut = "SELECT * FROM servicii where id = $editez";
  $rezultat = mysqli_query($cnx, $caut);
  $rez = mysqli_fetch_assoc($rezultat);
?>
      <div class="container mt-5" style="width: 1200px;">
        <form method="post" action="formulare/editserviciu.php">
          <input type="hidden" name="editez" value="<?= $editez ?>">

            <div class="form-group row">
            	<label for="imagine" class="col-sm-3 col-form-label">Selectați imaginea (600x400 px):</label>
            	<div class="col-sm-4 input-group mb-2">
            		<input type="file" name="imagine" id="imagine" value="<?= $rez['imagine'] ?>">
            	</div>
            </div>

            <div class="form-group row">
                <label for="titlu" class="col-sm-3 col-form-label">Titlu serviciu:</label>
                <div class="col-sm-9 input-group mb-2">
                    <input type="text" class="form-control" name="titlu_serviciu" id="titlu_serviciu"value="<?= $rez['titlu_serviciu'] ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="prezentare" class="col-sm-3 col-form-label">Descriere serviciu:</label>
                <div class="col-sm-9 input-group mb-2">
                    <input type="text"  class="form-control" name="descriere_serviciu" id="descriere_serviciu" rows="5" value="<?= $rez['descriere_serviciu'] ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="titlu" class="col-sm-3 col-form-label">Titlu detalii:</label>
                <div class="col-sm-9 input-group mb-2">
                    <input type="text" class="form-control" name="titlu_detalii" id="titlu_detalii" value="<?= $rez['titlu_detalii'] ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="prezentare" class="col-sm-3 col-form-label">Detalii:</label>
                <div class="col-sm-9 input-group mb-2">
                    <input type="text"  class="form-control" name="detalii" id="detalii" rows="5"  value="<?= $rez['detalii'] ?>">
                </div>
            </div>


          <button type="submit" class="btn btn-secondary mb-2 col-xs-3">Modifică!</button>
        </form>
      </div>
    </main>
  </body>
</html>