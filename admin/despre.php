<?php
include 'sesiune.php';
$despre_active = ' class="active"';
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

<div class="container  mt-5" style="max-width:900px;"style="background-image: url('../assets/img/page-header.jpg');">
  <div class="middle">
  <div class="container">
    <h1 class="text-center" style="padding-top: 300px;">COMING SOON</h1>
  </div>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  </div>
  <div class="bottomleft">
    <p>Oricât de obositoare ar fi așteptarea, la sfârșitul ei ne vom da seama că ce este menit să se întâmple se va întâmpla atunci când trebuie, nu atunci când ne dorim noi.</p>
  </div>
  </div>
</div>



<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 25, 2023 15:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>
