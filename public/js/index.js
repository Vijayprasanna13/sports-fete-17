$(document).ready(function() {

  $.ajax({  //AJAX request to obtain departments and their scores from database
    url: "api/scores",
    type: 'GET',

    success: function(data) {
      $('#leaderboardBody').html(" ");  //clearing the inner parts of table body
      data = JSON.parse(data);  //parsing the data returned from the api
      data = data['data'];  //data is an object in the returned json, which contains array of departments and their scores in descending order.

      for(var x in data) {
        var pos = parseInt(x)+1;
        $('#leaderboardBody').append("<tr><td>"+pos+"</td><td>"+data[x].department_name+"</td><td>"+data[x].score+"</td></tr>");
      }
    },

    error: function(data) {
      console.log(data);
    }
  });
});
