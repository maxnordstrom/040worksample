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

