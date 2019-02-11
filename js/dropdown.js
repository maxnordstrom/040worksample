let courseDropdown = $('#course-dropdown');

courseDropdown.empty();
courseDropdown.append('<option selected="true" disabled>Choose Course</option>');
courseDropdown.prop('selectedIndex', 0);

const url = 'endpoints/courses.json';

// Populate course dropdown with list of courses
$.getJSON(url, function (data) {
  $.each(data, function (key, entry) {
    courseDropdown.append($('<option></option>').attr('value', entry.id).text(entry.name));
  })
});


// Define initial state for date dropdown
let dateDropdown = $("#date-dropdown");
dateDropdown.append('<option selected="true" disabled>Select Date</option>');


// Watch for changes in course dropdown and populate date dropdown
$("#course-dropdown").change(function() {

  dateDropdown.empty();
  dateDropdown.append('<option selected="true" disabled>Select Date</option>');
  dateDropdown.prop('selectedIndex', 0);

  $.getJSON(url, function (data) {
    $.each(data, function (key, entry) {
      dateDropdown.append($('<option></option>').attr('value', entry.id).text(entry.dates));
    })
  })
});
