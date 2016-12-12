$(document).ready(function() {
  $.ajax({
    url: "api/scores",
    type: 'GET',
    success: function(data) {
      $('#leaderboardBody').html(" ");
      data = JSON.parse(data);
      data = data['data'];
      console.log(data);
      for(var x in data) {
        var pos = parseInt(x)+1;
        $('#leaderboardBody').append("<tr><td>"+pos+"</td><td>"+data[x].department_name+"</td><td>"+data[x].score+"</td></tr>");
        console.log(data[x]);
      }
    },
    error: function(data) {
      console.log(data);
    }
  });
});
