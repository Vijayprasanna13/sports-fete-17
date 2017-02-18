/**
*Helper functions
*/
function AppendList(data){
	$.map(data,function(event,i){
		$('#event-input-wrapper > select').append('<option>'+event['name']+'</option>');
	});
}

function SetScoreForDepartment(department, score, event){
 $.ajax({
  url: "/auth/add/scores",
  type: "POST",
  data: {'score':score,'department':department,'event':event},
  success: function(data){
    if(data == 'success'){
      alert('Added successfully!');
      location.reload();
    }
  },
  error: function(data){console.log(data);}
 });
}

function SetScores(){
  console.log('success');
  var event = $('#event').val();
  var departments = ['CSE','ECE','EEE','MECH','ICE','CIVIL','CHEM','PROD','META','ARCH','MTECH','MCA','PHD\\+MSC','DOMS'];
  $.map(departments,function(department,i){
    var score = $('#'+department).val();
		department = department.replace('\\', '');
    if(score != 0)
      SetScoreForDepartment(department,score,event);
  });
}

function GetConfirmation(){
  var confirmation = prompt("Please Confirm! These will be regarded as the final scores for the events. Enter Y to confirm","Type here");
  if(confirmation == 'Y')
		SetScores();
  location.reload();
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
  $(document).scrollTop(0);
	GetEventsList();
  $('#submit').on('click',function(){GetConfirmation()});
});
