$(document).ready(function(){
  $('#day').on('input',function(){

    $.ajax({
      url : '/api/events/'+$('#day').val(),
      type : 'GET',
      success: function(data){
        console.log(data);
      },
      error: function(data){
        console.log(data);
      }
    });

  });
});
