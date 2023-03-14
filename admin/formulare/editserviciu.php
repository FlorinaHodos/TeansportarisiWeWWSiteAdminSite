<?php
session_start();
if(isset($_SESSION['logat']) && $_SESSION['logat'] == true) {
  $cod = $_POST['editez'];

  $corecta_i = $_POST['imagine'];
  $corecta_ts = $_POST['titlu_serviciu'];
  $corecta_ds= $_POST['descriere_serviciu'];
  $corecta_td = $_POST['titlu_detalii'];
  $corecta_d = $_POST['detalii'];
  include '../../conect.php';

  $comanda = "UPDATE servicii set imagine = '$corecta_i', titlu_serviciu = '$corecta_ts', descriere_serviciu = '$corecta_ds', titlu_detalii ='$corecta_td', detalii = '$corecta_d' where id = $cod";

  $myfile = fopen("update.txt", "w") or die("Unable to open file!");
  $txt = "John Doe\n";
  fwrite($myfile, $comanda);
  fclose($myfile);


mysqli_query($cnx, $comanda);
mysqli_close($cnx);
  //  Reincarc "servicii.php"
  header('Location: ../servicii.php');
} else {
  //  Nu este logat!
  header('Location: ../index.php');
}
?>
