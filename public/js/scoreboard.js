$(document).ready(function() {
var globalData;
function AppendList(data){
  $.map(data,function(event,i){
    $('#eventslist').append('<option>'+event['name']+'</option>');
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

  GetEventsList();
  $('#eventslist').on('change',function(){

  });

  $.ajax({
    url: "api/scores",
    type: 'GET',
    success: function(data) {
      $('#leaderboardBody').html(" ");
      data = JSON.parse(JSON.stringify(data));
      data = data['data'];
      console.log(data);
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

  //To display scores scored in each events
  $.ajax({
    url: 'api/events',
    type: 'GET',

    success: function(data) {
      $('#scoreboard_body').html(" ");
        console.log(data);
        for(var x in data) {
          //condition to calculate the position if multiple teams score same points
          $('#scoreboardBody').append(
              // "<tr onclick=\"window.document.location=\'deptscore/"+data[x].id+"\';\">"+
              "<tr>"+
                "<td>"+data[x]['name']+"</td>"+
                "<td>"+data[x]['winner']+"</td>"+
              "</tr>"
            );
          console.log(data[x]);
        }
      },
      // var event = data[0].name;
      // var html = '<div class="row">';
      // var rowCount = 0;
      // for(var item=0; item < data.length; item++) {
      //   rowCount++;
      //   html +=
      //     '<div class="col-sm-4">'+
      //       '<div class="panel panel-default scoretable">'+
      //         '<div class="panel-heading">'+
      //           '<strong>'+data[item].name+'</strong>'+
      //         '</div>'+
      //         '<div class="panel-body">';
      //   html += '<div class="col-xs-6">Department</div><div class="col-xs-6">Score</div>';
      //   for(; item < data.length && data[item].name === event; item++) {
      //     html += '<div class="col-xs-6">'+data[item].department.department_name+'</div><div class="col-xs-6">'+data[item].score+'</div>';
      //   }
      //   html += '</div></div></div>';
      //   item--;
      //   if(item+1 < data.length) {
      //     event = data[item+1].event.name;
      //   }
      //   if(rowCount == 3) {
      //     rowCount = 0;
      //     html += '</div><div class="row">';
      //   }
    error: function(data) {
      console.log(data);
    }
  });

  var days = [1, 2, 3, 4];
  $.ajax({
    url: 'api/events/day/'+days[0],
    type: 'GET',

    success: function(data) {
      $('#events_body_day1').html(" ");
      for(var event in data) {
        var date = new Date(data[event].start_time);
        console.log(data);
        var dt = data[event].start_time.split(/[- :]/);
        data[event].start_time = dt[2]+"/"+dt[1]+"/"+dt[0]+"&nbsp;&nbsp "+dt[3]+":"+dt[4];
        if(data[event].department == null) {
          data[event].department = {department_name: "---"}
        }
        if(data[event].status == "c") {
          data[event].start_time = "Completed";
        }
        if(data[event].status == "l") {
          data[event].start_time = "Live";
        }
        if(data[event].participants.length == 0) {
          data[event].participants[0] = data[event].teama;
          data[event].participants[1] = data[event].teamb;
        }
        if(data[event].participants.length <= 2) {
          $('#events_body_day1').append(
            "<tr>"+
              "<td>"+data[event].fixture+"</td>"+
              "<td>"+data[event].name+" "+data[event].participants[0]+" vs "+data[event].participants[1]+"</td>"+
              "<td>"+data[event].start_time+"</td>"+
              "<td>"+data[event].department.department_name+"</td>"+
              "<td>"+data[event].venue+"</td>"+
              "<td>"+data[event].round+"</td>"+
            "</tr>"
          );
        }
        else {
          $('#events_body_day1').append(
            "<tr>"+
              "<td>"+data[event].name+"</td>"+
              "<td>"+data[event].start_time+"</td>"+
              "<td>"+data[event].department.department_name+"</td>"+
              "<td>"+data[event].venue+"</td>"+
              "<td>"+data[event].round+"</td>"+
            "</tr>"
          );
        }
      }
    },
    error: function(data) {
      console.log(data);
    }
  })
  $.ajax({
    url: 'api/events/day/'+days[1],
    type: 'GET',

    success: function(data) {
      $('#events_body_day2').html(" ");
      for(var event in data) {
        var date = new Date(data[event].start_time);
        console.log(data);
        var dt = data[event].start_time.split(/[- :]/);
        data[event].start_time = dt[2]+"/"+dt[1]+"/"+dt[0]+"&nbsp;&nbsp "+dt[3]+":"+dt[4];
        if(data[event].department == null) {
          data[event].department = {department_name: "---"}
        }
        if(data[event].status == "c") {
          data[event].start_time = "Completed";
        }
        if(data[event].status == "l") {
          data[event].start_time = "Live";
        }
        if(data[event].participants.length == 0) {
          data[event].participants[0] = data[event].teama;
          data[event].participants[1] = data[event].teamb;
        }
        if(data[event].participants.length <= 2) {
          $('#events_body_day2').append(
            "<tr>"+
              "<td>"+data[event].fixture+"</td>"+
              "<td>"+data[event].name+" "+data[event].participants[0]+" vs "+data[event].participants[1]+"</td>"+
              "<td>"+data[event].start_time+"</td>"+
              "<td>"+data[event].department.department_name+"</td>"+
              "<td>"+data[event].venue+"</td>"+
              "<td>"+data[event].round+"</td>"+
            "</tr>"
          );
        }
        else {
          $('#events_body_day2').append(
            "<tr>"+
              "<td>"+data[event].name+"</td>"+
              "<td>"+data[event].start_time+"</td>"+
              "<td>"+data[event].department.department_name+"</td>"+
              "<td>"+data[event].venue+"</td>"+
              "<td>"+data[event].round+"</td>"+
            "</tr>"
          );
        }
      }
    },
    error: function(data) {
      console.log(data);
    }
  })
  $.ajax({
    url: 'api/events/day/'+days[2],
    type: 'GET',

    success: function(data) {
      $('#events_body_day3').html(" ");
      for(var event in data) {
        var date = new Date(data[event].start_time);
        console.log(data);
        var dt = data[event].start_time.split(/[- :]/);
        data[event].start_time = dt[2]+"/"+dt[1]+"/"+dt[0]+"&nbsp;&nbsp "+dt[3]+":"+dt[4];
        if(data[event].department == null) {
          data[event].department = {department_name: "---"}
        }
        if(data[event].status == "c") {
          data[event].start_time = "Completed";
        }
        if(data[event].status == "l") {
          data[event].start_time = "Live";
        }
        if(data[event].participants.length == 0) {
          data[event].participants[0] = data[event].teama;
          data[event].participants[1] = data[event].teamb;
        }
        if(data[event].participants.length <= 2) {
          $('#events_body_day3').append(
            "<tr>"+
              "<td>"+data[event].fixture+"</td>"+
              "<td>"+data[event].name+" "+data[event].participants[0]+" vs "+data[event].participants[1]+"</td>"+
              "<td>"+data[event].start_time+"</td>"+
              "<td>"+data[event].department.department_name+"</td>"+
              "<td>"+data[event].venue+"</td>"+
              "<td>"+data[event].round+"</td>"+
            "</tr>"
          );
        }
        else {
          $('#events_body_day3').append(
            "<tr>"+
              "<td>"+data[event].name+"</td>"+
              "<td>"+data[event].start_time+"</td>"+
              "<td>"+data[event].department.department_name+"</td>"+
              "<td>"+data[event].venue+"</td>"+
              "<td>"+data[event].round+"</td>"+
            "</tr>"
          );
        }
      }
    },
    error: function(data) {
      console.log(data);
    }
  })

  $.ajax({
    url: 'api/events/day/'+days[3],
    type: 'GET',

    success: function(data) {
      $('#events_body_day4').html(" ");
      for(var event in data) {
        var date = new Date(data[event].start_time);
        console.log(data);
        var dt = data[event].start_time.split(/[- :]/);
        data[event].start_time = dt[2]+"/"+dt[1]+"/"+dt[0]+"&nbsp;&nbsp "+dt[3]+":"+dt[4];
        if(data[event].department == null) {
          data[event].department = {department_name: "---"}
        }
        if(data[event].status == "c") {
          data[event].start_time = "Completed";
        }
        if(data[event].status == "l") {
          data[event].start_time = "Live";
        }
        if(data[event].participants.length == 0) {
          data[event].participants[0] = data[event].teama;
          data[event].participants[1] = data[event].teamb;
        }
        if(data[event].participants.length <= 2) {
          $('#events_body_day4').append(
            "<tr>"+
              "<td>"+data[event].fixture+"</td>"+
              "<td>"+data[event].name+" "+data[event].participants[0]+" vs "+data[event].participants[1]+"</td>"+
              "<td>"+data[event].start_time+"</td>"+
              "<td>"+data[event].department.department_name+"</td>"+
              "<td>"+data[event].venue+"</td>"+
              "<td>"+data[event].round+"</td>"+
            "</tr>"
          );
        }
        else {
          $('#events_body_day4').append(
            "<tr>"+
              "<td>"+data[event].name+"</td>"+
              "<td>"+data[event].start_time+"</td>"+
              "<td>"+data[event].department.department_name+"</td>"+
              "<td>"+data[event].venue+"</td>"+
              "<td>"+data[event].round+"</td>"+
            "</tr>"
          );
        }
      }
    },
    error: function(data) {
      console.log(data);
    }
  })

})
