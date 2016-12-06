$(document).ready(function(){
  $('#day-submit').click(function(){
    var day = $('#day').val();
    var depts = ['---','CSE','ECE','EEE','MECH','ICE','CIVIL','CHEM','PROD','META','ARCH'];
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
    var day = $('#day').val();
    var event = $('#event').val();
    var depts = ['CSE','ECE','EEE','MECH','ICE','CIVIL','CHEM','PROD','META','ARCH'];
    $.map(depts,function(department,i){
      var score = $("#"+department).val();
      $.ajax({
        url: '/api/scores',
        type: 'POST',
        data: {"day":day,"department":department,"score":score,"event":event},
        success: function(data) {
          data = JSON.parse(data);
          if(i == 9)
            var n = noty({text: '<h2><b>'+data['message']+'</b></h2><br/>click to dismiss',type:'success'});
          },
        error: function(data){console.log(data);}
      });
    });
  });
});
