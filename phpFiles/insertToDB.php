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
$question = "SELECT afm FROM pagies WHERE afm = $afm ";
$result = $mysqli->query($question);
if ($result->num_rows == 0) { //Αν τo Afm δεν βρεθεί στη Β.Δ. εισάγουμε νέα εγγραφή.
$question="INSERT INTO
pagies (afm, eponimo, onoma, patronimo, koinotita, dieythinsi, kod_trapez, trapeza, iban, adt, stathero, kinito)
VALUES
('$afm','$eponimo','$onoma','$patronimo','$koinotita','$dieythinsi','$kod_trapez','$trapeza','$iban','$adt','$stathero','$kinito')";
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
                  } else { //Αν το AMKA υπάρχει ήδη στη Β.Δ. ενημέρώνουμε τον χρήστη για την αποτυχία εγγραφής.
                      echo '  <script language="javascript" type="text/javascript">
                              if (!alert ("To ΑΦΜ ΥΠΑΡΧΕΙ ΣΤΗΝ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ!")) {
                              location.href = "../index.php";
                              }    </script>';
                      exit();
                        }
$result->close(); //Κλείσιμο $result για καθαρισμό μνήμης.
$mysqli->close(); //Κλείσιμο σύνδεσης με ΒΔ.
?>
