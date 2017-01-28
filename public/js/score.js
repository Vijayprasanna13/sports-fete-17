$(document).ready(function(){
  $('#day').on('input',function(){
    if((!$('#day').val()) || (!['1', '2', '3'].includes($('#day').val())) ) {
      $('#event-selector-wrapper').fadeOut('fast');
    }
    else {
      $.ajax({
        url : '/api/events/day/'+$('#day').val(),
        type : 'GET',
        success: function(events){
          $('#event-selector-wrapper').fadeIn('fast');
          $('#event').html('');
          $.map(events,function(event,index){
            // var participants = GetParticipants(event);
            $('#event').append('<option>'+event.name+'</option>');
          });
          console.log(events);
        },
        error: function(data){
          console.log(data);
        }
      });
    }
  });

/*  function GetParticipants(event){
    departments = ['CSE','ECE','EEE','MECH','CHEM','ICE','CIVIL','PROD','META','MSC','MCA','DOMS','MTECH','ARCH'];
  }
*/
});
