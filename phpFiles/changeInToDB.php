<?php
require 'connectDB.php';

$afm = $_POST['afm'];
$eponimo = $_POST['eponimo'];
$onoma = $_POST['onoma'];
$patronimo = $_POST['patronimo'];
$kod_trapez = $_POST['kod_trapez'];
$iban=$_POST['iban'];
$koinotita = $_POST['koinotita'];
$dieythinsi = $_POST['dieythinsi'];
$adt = $_POST['adt'];
$kinito = $_POST['kinito'];
$stathero = $_POST['stathero'];

if ($kod_trapez=="017"){

  $trapeza="ΤΡΑΠΕΖΑ ΠΕΙΡΑΙΩΣ Α.Ε.";
}

else if($kod_trapez=="011"){

  $trapeza="ΕΘΝΙΚΗ ΤΡΑΠΕΖΑ ΤΗΣ ΕΛΛΑΔΟΣ Α.Ε.";
}


//Ελέγχουμε εάν το afm δεν υπάρχει ήδη στη Β.Δ. από άλλον λογαριασμό
$question="UPDATE pagies set eponimo='$eponimo', onoma='$onoma', patronimo='$patronimo', koinotita='$koinotita', dieythinsi='$dieythinsi', kod_trapez='$kod_trapez', trapeza='$trapeza', iban='$iban', adt='$adt', stathero='$stathero', kinito='$kinito'
WHERE afm='$afm'";
//Εάν η εγγραφή ολοκληρωθεί σωστά

if ($mysqli->query($question) === true) {
  $_SESSION['afm']=$afm;
      echo '  <script language="javascript" type="text/javascript">
              if (!alert ("Συγχαρητήρια! Η εγγραφή πραγματοποιήθηκε.")) {
                location.href = "../index.php";
                                }  </script>';
                        exit();
                    } else { //Αν η εγγραφή αποτύχει εξαιτίας ενός σφάλματος.
                        echo '  <script language="javascript" type="text/javascript">
                                if (!alert ("Σφάλμα! Η εγγραφή δεν πραγματοποιήθηκε: ' . $mysqli->error . '")) {
                                    history.go (-1);
                                }   </script>';
                    }

$result->close(); //Κλείσιμο $result για καθαρισμό μνήμης.
$mysqli->close(); //Κλείσιμο σύνδεσης με ΒΔ.
?>
