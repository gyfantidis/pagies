<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Επεξεργασία Παραγωγού</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>

  <?php
  require 'phpFiles/connectDB.php';
  session_start();


      $afm = $_POST['afmToChange'];


  $question = "SELECT * FROM pagies WHERE afm = $afm";
  $result = $mysqli -> query($question);
  while ($row = $result->fetch_assoc()) {
      $eponimo=$row['eponimo'];
      $onoma=$row['onoma'];
      $patronimo=$row['patronimo'];
      $koinotita=$row['koinotita'];
      $dieythinsi=$row['dieythinsi'];
      $kod_trapez=$row['kod_trapez'];
      $iban=$row['iban'];
      $adt=$row['adt'];
      $stathero=$row['stathero'];
      $kinito=$row['kinito'];
      $trapeza=$row['trapeza'];

  }

  ?>


  <body>



        <div class=" bg-primary leyko container epikefalida">
              <h1>Επεξεργασία Στοιχείων Παραγωγού</h1>
        </div>
        <br>





          <div class="container">

            <br>


          <form name="printForm" action="phpFiles/changeInToDB.php"  method="post"
          class="row g-3 needs-validation" novalidate>

          <div class="col-md-2">
            <br>
            <label for="validationCustom01" class="form-label">ΑΦΜ</label>
            <input type="text" class="form-control" name="afm" id="afm" value="<?php if (isset($afm)){echo $afm;} ?>" required readonly>

          </div>

          <div class="col-md-4">
            <br>
            <label for="validationCustom02" class="form-label">Τράπεζα</label>

            <select class="form-select" id="kod_trapez" name="kod_trapez" required>
              <?php
              if ($kod_trapez=="017"){
                echo '
                <option selected value=017 >ΤΡΑΠΕΖΑ ΠΕΙΡΑΙΩΣ Α.Ε.</option>
                <option value=011 >ΕΘΝΙΚΗ ΤΡΑΠΕΖΑ ΤΗΣ ΕΛΛΑΔΟΣ Α.Ε.</option>
                ';
              }

              else if($kod_trapez=="011"){
                echo '
                <option  value=017 >ΤΡΑΠΕΖΑ ΠΕΙΡΑΙΩΣ Α.Ε.</option>
                <option selected value=011 >ΕΘΝΙΚΗ ΤΡΑΠΕΖΑ ΤΗΣ ΕΛΛΑΔΟΣ Α.Ε.</option>
                ';
              }


               ?>

            </select>


          </div>
          <div class="col-md-6">
            <br>
            <label for="validationCustom02" class="form-label">IBAN</label>
            <input type="text" class="form-control" id="iban" name="iban" value="<?php if (isset($iban)){echo $iban;} ?>" required >

          </div>






  <div class="col-md-4">
    <br>
    <label for="validationCustom01" class="form-label">Επώνυμο</label>
    <input type="text" class="form-control" id="eponimo" name="eponimo" value="<?php if (isset($eponimo)){echo $eponimo;} ?>" required >

  </div>
  <div class="col-md-4">
    <br>
    <label for="validationCustom02" class="form-label">Όνομα</label>
    <input type="text" class="form-control" id="onoma" name="onoma" value="<?php if (isset($onoma)){echo $onoma;} ?>" required >

  </div>
  <div class="col-md-4">
    <br>
    <label for="validationCustom02" class="form-label">Πατρώνυμο</label>
    <input type="text" class="form-control" id="patronimo" name="patronimo" value="<?php if (isset($patronimo)){echo $patronimo;} ?>" required >

  </div>




  <div class="col-md-4">
    <br>
    <label for="validationCustom01" class="form-label">Κοινότητα</label>
    <input type="text" class="form-control" id="koinotita" name="koinotita" value="<?php if (isset($koinotita)){echo $koinotita;} ?>" required >

  </div>
  <div class="col-md-4">
    <br>
    <label for="validationCustom02" class="form-label">Διεύθυνση</label>
    <input type="text" class="form-control" id="dieythinsi" name="dieythinsi" value="<?php if (isset($dieythinsi)){echo $dieythinsi;} ?>" required >

  </div>
  <div class="col-md-4">
    <br>
    <label for="validationCustom02" class="form-label">Αριθμός Ταυτότητας</label>
    <input type="text" class="form-control" id="adt" name="adt" value="<?php if (isset($adt)){echo $adt;} ?>" required >

  </div>





  <div class="col-md-4">
    <br>
    <label for="validationCustom01" class="form-label">Σταθερό Τηλέφωνο</label>
    <input type="text" class="form-control" id="stathero" name="stathero" value="<?php if (isset($stathero)){echo $stathero;} ?>" required >

  </div>
  <div class="col-md-4">
    <br>
    <label for="validationCustom02" class="form-label">Κινητό Τηλέφωνο</label>
    <input type="text" class="form-control" id="kinito" name="kinito" value="<?php if (isset($kinito)){echo $kinito;} ?>" required >

  </div>
  <div class="col-md-4">
    <br>

  </div>





  <div class="koumpi">
    <br>
    <button class="btn btn-primary" type="submit">Αποθήκευση</button>
  </div>
</form>



          </div>


  </body>
</html>
