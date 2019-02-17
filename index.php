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
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
  </head>

  <body>
    <form class="needs-validation" id="signup-form" method="post" action="confirmation-message.php" novalidate>

      <!-- Course section -->
      <section class="course-section">
        <div class="col-md-10 mx-auto">
          <h2>Course</h2>
          <div class="select-course">
            <div class="select-name col-md-6">
              <label for="course-dropdown">Name*</label>
              <select class="form-control" id="course-dropdown" name="course_id" required></select>
              <div class="invalid-feedback">
                Please choose a course.
              </div>
            </div>
            <div class="select-date col-md-6">
              <label for="date-dropdown">Date</label>
              <select class="form-control" id="date-dropdown" name="course_date" required></select>
              <div class="invalid-feedback">
                Please choose a date.
              </div>
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
              <input type="text" class="form-control" id="company-name" name="company_name" required>
              <div class="invalid-feedback">
                Please enter company name.
              </div>
            </div>
            <div class="col-md-4">
              <label for="company-phone">Phone*</label>
              <input type="number" class="form-control" id="company-phone" name="company_phone" required>
              <div class="invalid-feedback">
                Please enter company phone.
              </div>
            </div>
            <div class="col-md-8">
              <label for="company-email">E-mail*</label>
              <input type="email" class="form-control" id="company-email" name="company_email" required>
              <div class="invalid-feedback">
                Please enter company e-mail.
              </div>
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
              <label for="participant-name">Name*</label>
              <input type="text" class="form-control" id="participant-name" name="participant_name_1" required>
              <div class="invalid-feedback">
                Please enter participant name.
              </div>
            </div>
            <div class="col-md-4">
              <label for="participant-phone">Phone*</label>
              <input type="number" class="form-control" id="participant-phone" name="participant_phone_1" required>
              <div class="invalid-feedback">
                Please enter participant phone.
              </div>
            </div>
            <div class="col-md-8">
              <label for="participant-email">E-mail*</label>
              <input type="email" class="form-control" id="participant-email" name="participant_email_1" required>
              <div class="invalid-feedback">
                Please enter participant e-mail.
              </div>
            </div>
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
            <button id="submit-application" type="submit" class="btn btn-primary col-md-12">Submit application</button>
          </div>
        </div>
      </section>
    </form>

    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/add-participant.js"></script>
    <script src="js/clear-form.js"></script>

    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

  </body>
</html>
