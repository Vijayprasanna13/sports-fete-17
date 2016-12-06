$(document).ready(function(){
  $('#day-submit').click(function(){
    var day = $('#day').val();
    var depts = ['---','CSE','ECE','EEE','MECH','ICE','CIVIL','CHEM','PROD','META','ARCH'];
    $.map(depts,function(department,i){
      $('#first-place').append('<option>'+department+'</option>');
      $('#second-place').append('<option>'+department+'</option>');
      $('#third-place').append('<option>'+department+'</option>');
    });
    $.ajax({
      url: "/api/events",
      data: {"day":day},
      type: "GET",
      success: function(data){
        $('#event').html(" ");
        $('#event-form').fadeIn("fast");
        data = JSON.parse(data);
        $.map(data['data'],function(data,i){
            $('#event').append("<option>"+data['name']+"</option>");
        });
      },
      error: function(data){console.log(data);}
    });
  });
  $('#submit').click(function(){
    var departments = [];
    var day = $('#day').val();
    var event = $('#event').val();
    departments.push($('#first-place').val());
    departments.push($('#second-place').val());
    departments.push($('#third-place').val());
    $.map(departments,function(department,i){
      $.ajax({
        url: '/api/scores',
        type: 'POST',
        data: {"day":day,"department":department,"position":i+1,"event":event},
        success: function(data) {
          data = JSON.parse(data);
          if(i == 2)
            var n = noty({text: '<h2><b>'+data['message']+'</b></h2><br/>click to dismiss',type:'success'});
          },
        error: function(data){console.log(data);}
      });
    });
  });
});
