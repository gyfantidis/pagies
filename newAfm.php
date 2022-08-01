<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Καταχώρηση Νέου Παραγωγού</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>


  <body>



        <div class="bg-primary leyko container epikefalida">
              <h1>Καταχώρηση Νέου Παραγωγού</h1>
        </div>
        <br>





          <div class="container">

            <br>


          <form name="printForm" action="phpFiles/insertToDB.php"  method="post"
          class="row g-3 needs-validation" novalidate>

          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">ΑΦΜ</label>
            <input type="text" class="form-control" name="afm" id="afm" value="" required >

          </div>

          <div class="col-md-2">
            <label for="validationCustom02" class="form-label">Τράπεζα</label>

            <select class="form-select" id="kod_trapez" name="kod_trapez" required>
              <option selected disabled value="">Διάλεξε την Τράπεζα</option>
              <option value="017"  >ΤΡΑΠΕΖΑ ΠΕΙΡΑΙΩΣ</option>
              <option value="011" >ΕΘΝΙΚΗ ΤΡΑΠΕΖΑ</option>
            </select>


          </div>
          <div class="col-md-6">
            <label for="validationCustom02" class="form-label">IBAN</label>
            <input type="text" class="form-control" id="iban" name="iban" value="" required >

          </div>






  <div class="col-md-4">
    <br>
    <label for="validationCustom01" class="form-label">Επώνυμο</label>
    <input type="text" class="form-control" id="eponimo" name="eponimo" value="" required >

  </div>
  <div class="col-md-4">
    <br>
    <label for="validationCustom02" class="form-label">Όνομα</label>
    <input type="text" class="form-control" id="onoma" name="onoma" value="" required >

  </div>
  <div class="col-md-4">
    <br>
    <label for="validationCustom02" class="form-label">Πατρώνυμο</label>
    <input type="text" class="form-control" id="patronimo" name="patronimo" value="" required >

  </div>




  <div class="col-md-4">
    <br>
    <label for="validationCustom01" class="form-label">Κοινότητα</label>
    <input type="text" class="form-control" id="koinotita" name="koinotita" value="" required >

  </div>
  <div class="col-md-4">
    <br>
    <label for="validationCustom02" class="form-label">Διεύθυνση</label>
    <input type="text" class="form-control" id="dieythinsi" name="dieythinsi" value="" required >

  </div>
  <div class="col-md-4">
    <br>
    <label for="validationCustom02" class="form-label">Αριθμός Ταυτότητας</label>
    <input type="text" class="form-control" id="adt" name="adt" value="" required >

  </div>





  <div class="col-md-4">
    <br>
    <label for="validationCustom01" class="form-label">Σταθερό Τηλέφωνο</label>
    <input type="text" class="form-control" id="stathero" name="stathero" value="" required >

  </div>
  <div class="col-md-4">
    <br>
    <label for="validationCustom02" class="form-label">Κινητό Τηλέφωνο</label>
    <input type="text" class="form-control" id="kinito" name="kinito" value="" required >

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
