$(document).ready(function() {

  var top = $('html').offset().top;
  if(top < 50) {
    $('.navbar-default').css('background-color', 'transparent');
  }
  //To change the bg-color of navbar once scrolled
  var scroll_start = 0;
  $(document).scroll(function() {
    scroll_start = $(this).scrollTop();
    if(scroll_start > 50) {
      $('.navbar-default').css('background-color', '#7777ff');
    }
    else {
      $('.navbar-default').css('background-color', 'transparent');
    }
  });

  $(".navbar a").on('click', function(event) {
     if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({scrollTop: $(hash).offset().top}, 900, function(){
      });
    }
  });

  //Updating the leaderboard in homepage with details from database
  $.ajax({
    url: "api/scores",
    type: 'GET',

    success: function(data) {
      $('#leaderboardBody').html(" ");
      data = JSON.parse(JSON.stringify(data));
      data = data['data'];
      var pos=1, prevScore;

      for(var x in data) {
        //condition to calculate the position if multiple teams score same points
        if(parseInt(x) !== 0 && data[x].score === prevScore) {
          pos--;
        }
        $('#leaderboardBody').append(
            "<tr onclick=\"window.document.location=\'deptscore/"+data[x].id+"\';\">"+
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

  //Update the events table with the events happening on the current day.
  $.when(currentDay()).done(function(a) { //Wait for the currentDay function to process first
    $.ajax({
      url: 'api/events/'+day,
      type: 'GET',

      success: function(data) {
        $('#events_body').html(" ");
        var numberOfEvents = 0;
        data = data['data'];
        for(var event in data) {
          var dt = data[event].start_time.split(/[- :]/);
          var eventDate = new Date(dt[0], dt[1]-1, dt[2], dt[3], dt[4], dt[5]);
          var curDate = new Date();
          if(eventDate > curDate && numberOfEvents < 7) {
            $('#events_body').append(
              "<tr>"+
                "<td>"+dt[2]+"-"+dt[1]+"-"+dt[0]+"</td>"+
                "<td>"+data[event].name+"</td>"+
                "<td>"+dt[3]+":"+dt[4]+"</td>"+
                "<td>"+data[event].venue+"</td>"+
              "</tr>"
            );
            numberOfEvents++;
          }
        }
      },
      error: function(data) {
        console.log(data);
      }
    })
  });

});
