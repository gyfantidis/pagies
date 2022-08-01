<?php

echo '<meta charset="UTF-8"/>';
session_start();
require 'connectDB.php';
//Εισαγωγή δεδομένων από την φόρμα

$afm = $_POST['afm'];
//Ορισμός τον Sessions

$_SESSION['afm'] = $afm;


//Ερώτημα προς την βάση, εάν υπάρχει χρήστης με το ΑΦΜ
//και εάν ναι να μας επιστρέψει τα στοιχεία του
$question = "SELECT * FROM pagies WHERE afm = $afm";
$result = $mysqli -> query($question);


if ($result -> num_rows == 0) { //Εάν δεν υπάρχει χρήστης
    $_SESSION['chek']=0;
    echo    '<script language="javascript" type="text/javascript">
            if (!alert ("Το ΑΦΜ δεν υπάρχει στην βάση δεδομένων! Προσπαθήστε ξανά.")) {

                history.go (-1);
            }
            </script>';
}
else {
  $_SESSION['chek']=1;
  echo   '<script language="javascript" type="text/javascript">
            history.go (-1);
                            </script>';
}




$result->close(); //Κλείσιμο $result για καθαρισμό μνήμης.
$mysqli->close(); //Κλείσιμο σύνδεσης με ΒΔ.

?>
