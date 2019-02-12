jQuery(document).ready(function() {
  $("#submit-application").click(function() {
    setTimeout(function() {
      document.getElementById("signup-form").reset();
    }, 1)
  })
});