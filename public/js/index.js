$(document).ready(function() {

  $.ajax({  //AJAX request to obtain departments and their scores from database
    url: "api/scores",
    type: 'GET',

    success: function(data) {
      $('#leaderboardBody').html(" ");  //clearing the inner parts of table body
      data = JSON.parse(data);  //parsing the data returned from the api
      data = data['data'];  //data is an object in the returned json, which contains array of departments and their scores in descending order.
      var pos=1, prevScore;

      for(var x in data) {
        //condition to calculate the position if multiple teams score same points
        if(parseInt(x) !== 0 && data[x].score === prevScore) {
          pos--;
        }
        $('#leaderboardBody').append(
            "<tr>"+
              "<td>"+pos+"</td>"+
              "<td>"+data[x].department_name+"</td>"+
              "<td>"+data[x].score+"</td>"+
            "</tr>"
          );
        pos++;
        prevScore = data[x].score;
      }
    },

    error: function(data) {
      console.log(data);
    }
  });

  var day;
  function currentDay() { //function to find the current day
    return $.ajax({
      url: "api/day",
      type: 'GET',

      success: function(data) {
        day = data;
      },
      error: function(data) {
        console.log(data);
      }
    });
  }

  $.when(currentDay()).done(function(a) { //Wait for the currentDay function to process first
    $.ajax({  //Updating the events table with the events happening on the current day.
      url: 'api/events',
      type: 'GET',
      data: {'day': day},

      success: function(data) {
        data = JSON.parse(data)['data'];
        $('#events_body').html(" ");
        for(var event in data) {
          var dt = data[event].start_time.split(/[- :]/);
          $('#events_body').append(
            "<tr>"+
              "<td>"+dt[2]+"-"+dt[1]+"-"+dt[0]+"</td>"+
              "<td>"+data[event].name+"</td>"+
              "<td>"+dt[3]+":"+dt[4]+"</td>"+
            "</tr>"
          );
        }
      },
      error: function(data) {
        console.log(data);
      }
    })
  });
});
