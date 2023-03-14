<?php
session_start();

function corectez($sir) {
  $sir = trim($sir);
  $sir = stripslashes($sir);
  $sir = htmlspecialchars($sir);
  return $sir;
}

if(isset($_SESSION['logat']) && $_SESSION['logat'] == true) {
  $eroare = '';


  // preiau imaginea aleasa
  $poza = $_FILES["imagine"]["name"];
  $nmtmp = $_FILES["imagine"]["tmp_name"];
  $extensie = pathinfo($poza,PATHINFO_EXTENSION);

  // numele initial pt toate pozele
  $pinit = 'temp.png';

  // preiau valorile din campurile formularului (titlu_serviciu, descriere, titlu_detalii, detalii) și verific daca au fost completate
  $eroare = '';

  if(empty($_POST['titlu_serviciu'])) {
    $eroare .= '<p>Nu ați introdus titlul serviciului!</p>';
  } else {
    $titlu_serviciu = corectez($_POST['titlu_serviciu']);
  }

  if(empty($_POST['descriere_serviciu'])) {
    $eroare .= '<p>Nu ați introdus descrierea serviciului!</p>';
  } else {
    $descriere_serviciu = corectez($_POST['descriere_serviciu']);
  }

  if(empty($_POST['titlu_detalii'])) {
    $eroare .= '<p>Nu ați introdus titlul detaliului!</p>';
  } else {
    $titlu_detalii = corectez($_POST['titlu_detalii']);
  }

  if(empty($_POST['detalii'])) {
    $eroare .= '<p>Nu ați introdus detaliile!</p>';
  } else {
    $detalii = corectez($_POST['detalii']);
  }
  //  Verific daca preluarea datelor s-a derulat corect
  if($eroare == '') {
    //  Nu sunt mesaje de eroare

    // formulez comanda INSERT
    include '../../conect.php';
    $comanda = "INSERT INTO servicii (imagine, titlu_serviciu, descriere_serviciu, titlu_detalii, detalii) VALUES (?, ?, ?, ?, ?)";
    if ( $stm = mysqli_prepare($cnx, $comanda)){
    mysqli_stmt_bind_param($stm, 'sssss', $pinit, $titlu_serviciu, $descriere_serviciu, $titlu_detalii, $detalii);
    mysqli_stmt_execute($stm);
    //  Preiau valoarea cheii primare
    $nr = mysqli_insert_id($cnx);
    //redenumesc fisierul continand imaginea si il copiez in directorul poze din site (/htdocs/Transportarisii/assets/img)

    $poza_r = "s".$nr.".".strtolower($extensie);  //  Numele incepe cu 'e', urmeaza valoarea cheii primare si apoi extensia. Exemplu: e3.png
    $cale = "../../assets/img/$poza_r";              //  Fiind in directorul /FamiliaMea/apliFamilia/formulare, calea e mai complicata!
    $rezultat = move_uploaded_file($nmtmp, $cale);
    // schimb denumirea fisierului in articolul scris
    $cdamodif = "UPDATE servicii set imagine='$poza_r' where id=$nr";
    mysqli_query($cnx, $cdamodif) or die("Nu merge update in tabel");

  } else {
    echo "Eroare la crearea variabilei de tip statement.";
  }
  mysqli_close($cnx);
  //  Reincarc "servicii.php"
  header('Location: ../servicii.php');
} else {
  echo "Eroare: " . $eroare;
}
} else {
//  Nu este logat!
header('Location: ../index.php');
}
?>