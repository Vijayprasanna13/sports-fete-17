$(document).ready(function(){
  $('#day').on('input',function(){
    var day = $('#day').val();
    var depts = ['---','CSE','ECE','EEE','MECH','ICE','CIVIL','CHEM','PROD','META','ARCH','MTECH','MCA','MSC','DOMS'];
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
        $.ajax({
          url: '/api/eventscores',
          data: {event_id:'1'},
          type: 'GET',
          success: function(data){console.log(data);},
          error: function(data){console.log(data);}
        });
      },
      error: function(data){console.log(data);}
    });
  });
  $('#event').on('change',function(){
    $.ajax({
      url: '/api/event  scores',
      data: '',
      type: 'GET',
      success: function(data){console.log(data);},
      error: function(data){console.log(data);}
    });
  });
  $('#submit').click(function(){
    var day = $('#day').val();
    var event = $('#event').val();
    var isSuccess = 'success';
    var i=0;
    $.each(depts,function(i,department){
      var score = $("#"+department).val();
      $.ajax({
        url: '/api/scores',
        type: 'POST',
        async: false,
        data: {"day":day,"department":department,"score":score,"event":event, "isSuccess":isSuccess, "requestCount":i},
        success: function(data) {
          data = JSON.parse(data);
          isSuccess = data['isSuccess'];
          console.log(data);
          if(i == 13)
            var n = noty({text: '<h2><b>Updated the scores!!</b></h2><br/>click to dismiss',type:'success'});
          },
        error: function(data){console.log(data);}
      });
    });
  });
});
