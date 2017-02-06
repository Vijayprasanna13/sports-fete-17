/**
*Helper functions
*/
function AppendList(data){
	$.map(data,function(event,i){
		$('')
	});
}

function GetEventsList(){
  $.ajax({
   url: '/api/events/list',
   data: {},
   method: 'GET',
   success: function(data){
   	AppendList(data);
   },
   error: function(data){
   	console.log(data);
   }
  }); 
}

$(document).ready(function(){
	GetEventsList();
});
