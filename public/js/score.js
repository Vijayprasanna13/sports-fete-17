$(document).ready(function(){
  $('#day').on('input',function(){

    $.ajax({
      url : '/api/events/'+$('#day').val(),
      type : 'GET',
      success: function(events){
        $('#event-selector-wrapper').fadeIn('fast');
        $.map(events,function(event,index){
          // var participants = GetParticipants(event);
          $('#event').append('<option>'+event.name+'</option>');
        });
      },
      error: function(data){
        console.log(data);
      }
    });
  });

/*  function GetParticipants(event){
    departments = ['CSE','ECE','EEE','MECH','CHEM','ICE','CIVIL','PROD','META','MSC','MCA','DOMS','MTECH','ARCH'];
  }
*/
});
