<?php
session_start();
if(isset($_SESSION['logat']) && $_SESSION['logat'] == true) {
  $cod = $_GET['sterg'];
  include '../../conect.php';
  $comanda = "DELETE FROM servicii where id = $cod";
  mysqli_query($cnx, $comanda);
  mysqli_close($cnx);
  //  Reincarc "servicii.php"
  header('Location: ../servicii.php');
} else {
  //  Nu este logat!
  header('Location: ../index.php');
}
?>