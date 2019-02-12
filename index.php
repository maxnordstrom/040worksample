<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>040 Worksample</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link rel="icon" href="favicon.ico" />
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->


<!-- Course section -->
  <section class="course-section">
    <div class="col-md-10 mx-auto">
      <h2>Course</h2>
      <form action="form-script.php" method="post">
        <div class="select-course">
          <div class="select-name col-md-6">
            <label for="select-name">Name*</label>
            <select class="form-control" id="course-dropdown" name="course_name"></select>
          </div>
          <div class="select-date col-md-6">
            <label for="select-date">Date</label>
            <select class="form-control" id="date-dropdown" name="course_date"></select>
          </div>
        </div>
    </div>
  </section>

  <!-- Company section -->
  <section class="company-section">
    <div class="col-md-10 mx-auto">
      <h2>Company</h2>
      <div class="d-flex flex-wrap">
        <div class="col-md-12">
          <label for="company-name">Name*</label>
          <input type="text" class="form-control" id="company-name" name="company_name">
        </div>
        <div class="col-md-4">
          <label for="company-phone">Phone*</label>
          <input type="number" class="form-control" id="company-phone" name="company_phone">
        </div>
        <div class="col-md-8">
          <label for="company-email">E-mail*</label>
          <input type="email" class="form-control" id="company-email" name="company_email">
        </div>
      </div>
    </div>
  </section>

  <!-- Participant section -->
  <section class="participant-section">
    <div class="col-md-10 mx-auto" id="append-here">
      <h2>Participants</h2>
      <h4 class="participant-header" id="participant-number-1">Participant #1</h4>
      <div class="d-flex flex-wrap">
        <div class="col-md-12">
          <label for="company-name">Name*</label>
          <input type="text" class="form-control" id="company-name" name="company_name">
        </div>
        <div class="col-md-4">
          <label for="company-phone">Phone*</label>
          <input type="number" class="form-control" id="company-phone" name="company_phone">
        </div>
        <div class="col-md-8">
          <label for="company-email">E-mail*</label>
          <input type="email" class="form-control" id="company-email" name="company_email">
        </div>
        <!-- <div class="btn-add-participant">
          <button type="button" class="btn btn-primary mt-3 add-participant" id="add-participant">Add a participant</button>
        </div> -->
      </div>
    </div>
    <div class="btn-add-participant col-md-10 mx-auto">
      <button type="button" class="btn btn-primary mt-3 ml-3 add-participant" id="add-participant">Add a participant</button>
    </div>
  </section>

  <!-- Submit section -->
  <section>
    <div class="col-md-10 mx-auto">
      <div class="btn-submit-application">
        <button type="submit" class="btn btn-primary col-md-12">Submit application</button>
      </div>
    </div>
  </form>
  </section>



  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/dropdown.js"></script>
  <script src="js/add-participant.js"></script>

</body>

</html>
