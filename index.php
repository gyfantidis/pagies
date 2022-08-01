<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Έκτύπωση Παγιών Εντολών</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>


  <body>
    <?php
    require 'phpFiles/connectDB.php';
    session_start();
    $chek=0;

    ?>



        <div class="bg-primary leyko container epikefalida">
              <h1>ΕΚΤΥΠΩΣΗ ΠΑΓΙΩΝ ΕΝΤΟΛΩΝ </h1>
        </div>
        <br>




        <div class="container">
        <div class="epikefalida row g-3 needs-validation">

          <div class="anazitisi col-md-5">



        <form name="searchForm" action="phpFiles/searchInDB.php" method="post">
          <div class="afm">
            <label for="validationCustom01" class="form-label">ΑΦΜ</label>
            <input type="text" class="form-control" id="afm" name="afm" value="" required >

          </div>
          <br />
          <div class="">
            <button class="btn btn-primary" type="submit">Αναζήτηση</button>

          </div>
        </form>




        </div>



          <div class=" col-md-3">
            <form>
              <div class="form-group">
                <input type="number" class="form-control" id="stremata" aria-describedby="emailHelp" placeholder="Στρέμματα">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" id="agrotemaxia" placeholder="Αγροτεμάχια">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" id="zoikes" placeholder="Ζωικές Μονάδες">

              </div>

              <div class="form-group form-check">
                <input type="checkbox" class="messageCheckbox form-check-input" id="pagia">
                <label class="form-check-label" for="exampleCheck1">Πάγια</label>

              </div>

              </form>

              <button type="submit" class="btn btn-primary" onclick="myFunction1();">Υπολογισμός</button>



          </div>

          <div class="pliromi col-md-4">

            <p id="plStr">
            </p>
            <p  id="plAgr">
            </p>
            <p id="plZoa">
            </p>
            <p id="plKostos">
            </p>
            <p id="plPag">
            </p>
            <p id="plFpa">
            </p>
            <p  role="alert" id="plSinolo">
            </p>













          </div>












            <br />
            <br />
          </div>




            <?php


            if (isset($_SESSION['chek'])){$chek=$_SESSION['chek'];}
            if (isset($_SESSION['afm'])){$afm=$_SESSION['afm'];}



            if($chek==1){

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
              $_SESSION['kod_trapez']=$kod_trapez;

          }
          ?>

          <br>
          <br>





          <form  name="printForm" action="printFile.php" target="_blank" method="post"
          class=" row g-3 needs-validation" novalidate>





            <div class="col-md-4">
                <br>
              <label for="validationCustom01" class="form-label">Επώνυμο</label>
              <input type="text" class="form-control" id="validationCustom01" value="<?php if (isset($eponimo)){echo $eponimo;} ?>" required readonly>

            </div>
            <div class="col-md-4">

              <br>
              <label for="validationCustom02" class="form-label">Όνομα</label>
              <input type="text" class="form-control" id="validationCustom02" value="<?php  if (isset($onoma)){echo $onoma;} ?>" required readonly>

            </div>
            <div class="col-md-4">

              <br>
              <label for="validationCustom02" class="form-label">Πατρώνυμο</label>
              <input type="text" class="form-control" id="validationCustom02" value="<?php  if (isset($patronimo)){echo $patronimo;} ?>" required readonly>

            </div>





                  <div class="col-md-4">
                    <br>
                    <label for="validationCustom01" class="form-label">Κοινότητα</label>
                    <input type="text" class="form-control" id="validationCustom01" value="<?php if (isset($koinotita)){echo $koinotita;} ?>" required readonly>

                  </div>
                  <div class="col-md-4">
                    <br>
                    <label for="validationCustom02" class="form-label">Διεύθυνση</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php  if (isset($dieythinsi)){echo $dieythinsi;} ?>" required readonly>

                  </div>
                  <div class="col-md-4">
                    <br>
                    <label for="validationCustom02" class="form-label">Αριθμός Ταυτότητας</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php  if (isset($adt)){echo $adt;} ?>" required readonly>

                  </div>



                  <div class="col-md-2">
                    <br>
                    <label for="validationCustom01" class="form-label">Κωδικός Τράπεζας</label>
                    <input type="text" class="form-control" id="validationCustom01" value="<?php if (isset($kod_trapez)){echo $kod_trapez;} ?>" required readonly>

                  </div>
                  <div class="col-md-4">
                    <br>
                    <label for="validationCustom02" class="form-label">Τράπεζα</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php  if (isset($trapeza)){echo $trapeza;} ?>" required readonly>

                  </div>
                  <div class="col-md-6">
                    <br>
                    <label for="validationCustom02" class="form-label">IBAN</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php  if (isset($iban)){echo $iban;} ?>" required readonly>

                  </div>



                  <div class="col-md-4">
                    <br>
                    <label for="validationCustom01" class="form-label">Σταθερό Τηλέφωνο</label>
                    <input type="text" class="form-control" id="validationCustom01" value="<?php  if (isset($stathero)){echo $stathero;} ?>" required readonly>

                  </div>
                  <div class="col-md-4">
                    <br>
                    <label for="validationCustom02" class="form-label">Κινητό Τηλέφωνο</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php  if (isset($kinito)){echo $kinito;} ?>" required readonly>

                  </div>
                  <div class="col-md-4">
                    <br>
                    <label for="validationCustom02" class="form-label">ΑΦΜ</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php  if (isset($afm)){echo $afm;} ?>" required readonly>

                  </div>



                  <div class="container">
                  <div class="epikefalida row g-3 needs-validation">

                    <div class="col-md-4">



                    <br>
                    <button class="btn btn-primary" type="submit">Εκτύπωση Πάγιας! ️</i><i class="fa-print"></i></button>

                </form>
              </div>


                <div class="col-md-4">
                <form class="newEgr" name="searchForm" action="newAfm.php" method="post">
                  <button class="btn btn-primary" type="submit">Νέα Εγγραφή</button>
                </form>

                </div>

                <div class="col-md-4">
                <form class="newEgr" name="changeForm" action="changeAfm.php" method="post">
                  <input  type="hidden" name="afmToChange" value="<?php if (isset($afm)){echo $afm;} ?>" >



                  <button class="btn btn-primary" type="submit">Επεξεργασία ΑΦΜ</button>

                </form>
                </div>

              </div>
            </div>




      <?php

      $mysqli->close(); //Κλείσιμο σύνδεσης με ΒΔ.
          ?>



          </div>

          <script src="ypologismos.js" charset="utf-8"></script>


  </body>
</html>
