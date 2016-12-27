$(document).ready(function() {

  var top = $('html').offset().top;
  console.log(top);
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

  //Updating the leaderboard in homepage with detai;s from database
  $.ajax({
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

  //Update the events table with the events happening on the current day.
  $.when(currentDay()).done(function(a) { //Wait for the currentDay function to process first
    $.ajax({
      url: 'api/events',
      type: 'GET',
      data: {'day': day},

      success: function(data) {
        data = JSON.parse(data)['data'];
        $('#events_body').html(" ");
        var numberOfEvents = 0;
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

  //To display scores scored in each events
  $.ajax({
    url: 'api/eventscores',
    type: 'GET',

    success: function(data) {
      data = JSON.parse(data)['data'];
      $('#events_score').html(" ");
      var eventId = data[0].event_id;
      var html = '';
      for(var item=0; item < data.length; item++) {
        html +=
          '<div class="col-sm-4">'+
            '<div class="panel panel-default">'+
              '<div class="panel-heading">'+
                '<strong>Event Id: '+data[item].event_id+'</strong>'+
              '</div>'+
              '<div class="panel-body">';
        html += '<div class="col-sm-6">Department Id</div><div class="col-sm-6">Score</div>';
        for(; item < data.length && data[item].event_id === eventId; item++) {
          html += '<div class="col-sm-6">'+data[item].department_id+'</div><div class="col-sm-6">'+data[item].score+'</div>';
        }
        html += '</div></div></div>';
        item--;
        if(item+1 < data.length) {
          eventId = data[item+1].event_id;
        }
      }
      $('#events_score').append(html);
    },
    error: function(data) {
      console.log(data);
    }
  })

});
