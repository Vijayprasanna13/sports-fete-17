$(document).ready(function() {
  var departments = ['---','CSE','ECE','EEE','MECH','ICE','CIVIL','CHEM','PROD','META','ARCH'];
  $.map(departments, function(department, i) {
    $('#departmentSelect').append('<option>'+department+'</option>');
  });
  $('#submit').click(function() {
    var department = $('#departmentSelect').val();
    var score = $('#scores').val();
    $.ajax({
      url: "/api/department",
      type: 'POST',
      data: {"department":department, "score":score},
      success: function(data) {
        data = JSON.parse(data);
        var n = noty({text: '<h3><b>'+data['message']+'</b></h3><br>Click to dismiss', type: 'success'});
      },
      error: function(data) {
        console.log(data);
      }
    });
  });
});
