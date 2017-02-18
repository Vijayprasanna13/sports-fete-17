$(document).ready(function() {
  var events = new Object();
  for(var i=1; i<=4; i++) {
    $.ajax({
      url: 'api/events/day/'+i,
      type: 'GET',
      async: false,

      success: function(data) {
        events['day'+i] = data;
        // $('#events_body_day'+i).html(" ");
        // for(var event in data) {
        //   var date = new Date(data[event].start_time);
        //   var dt = data[event].start_time.split(/[- :]/);
        //   data[event].start_time = dt[2]+"/"+dt[1]+"/"+dt[0]+"&nbsp;&nbsp "+dt[3]+":"+dt[4];
        //   if(data[event].department == null) {
        //     data[event].department = {department_name: "---"}
        //   }
        //   if(data[event].status == "c") {
        //     data[event].start_time = "Completed";
        //   }
        //   if(data[event].status == "l") {
        //     data[event].start_time = "Live";
        //   }
        //   if(data[event].participants.length == 0) {
        //     data[event].participants[0] = data[event].teama;
        //     data[event].participants[1] = data[event].teamb;
        //   }
        //   if(data[event].participants.length <= 2) {
        //     $('#events_body_day'+i).append(
        //       "<tr>"+
        //         "<td>"+data[event].fixture+"</td>"+
        //         "<td>"+data[event].name+" "+data[event].participants[0]+" vs "+data[event].participants[1]+"</td>"+
        //         "<td>"+data[event].start_time+"</td>"+
        //         "<td>"+data[event].department.department_name+"</td>"+
        //         "<td>"+data[event].venue+"</td>"+
        //         "<td>"+data[event].round+"</td>"+
        //       "</tr>"
        //     );
        //   }
        //   else {
        //     $('#events_body_day'+i).append(
        //       "<tr>"+
        //         "<td>"+data[event].name+"</td>"+
        //         "<td>"+data[event].start_time+"</td>"+
        //         "<td>"+data[event].department.department_name+"</td>"+
        //         "<td>"+data[event].venue+"</td>"+
        //         "<td>"+data[event].round+"</td>"+
        //       "</tr>"
        //     );
        //   }
        // }

      },
      error: function(data) {
        console.log(data);
      }
    });
  }

  function RenderTable() {
    var department = document.getElementById('filter_department').value;
    var day = document.getElementById('filter_day').value;
    var event_name = document.getElementById('filter_event').value;
    $('#filter_events_body').html('');
    for(var i=1; i<=4; i++) {
      if(day != ''+i+'' && day != 'ALL') {
        continue;
      }
      for(var event in events['day'+i]) {
        if(events['day'+i][event].name != event_name && event_name != 'ALL') {
          continue;
        }
        var date = new Date(events['day'+i][event].start_time);
        var dt = events['day'+i][event].start_time.split(/[- :]/);
        events['day'+i][event].start_tim = dt[2]+"/"+dt[1]+"/"+dt[0]+"&nbsp;&nbsp "+dt[3]+":"+dt[4];
        if(events['day'+i][event].department == null) {
          events['day'+i][event].department = {department_name: "---"}
        }
        if(events['day'+i][event].status == "c") {
          events['day'+i][event].start_tim = "Completed";
        }
        if(events['day'+i][event].status == "l") {
          events['day'+i][event].start_tim = "Live";
        }
        if(events['day'+i][event].participants.length == 0) {
          if(events['day'+i][event].teama != null) {
            events['day'+i][event].participants[0] = events['day'+i][event].teama;
          }
          if(events['day'+i][event].teamb != null) {
            events['day'+i][event].participants[1] = events['day'+i][event].teamb;
          }
        }
        if(events['day'+i][event].participants.length == 2) {
          if((events['day'+i][event].participants[0] != department && events['day'+i][event].participants[1] != department)&&department != 'ALL') {
            continue;
          }
          $('#filter_events_body').append(
            "<tr>"+
              "<td>"+events['day'+i][event].fixture+"</td>"+
              "<td>"+events['day'+i][event].name+" "+events['day'+i][event].participants[0]+" vs "+events['day'+i][event].participants[1]+"</td>"+
              "<td>"+events['day'+i][event].start_tim+"</td>"+
              "<td>"+events['day'+i][event].department.department_name+"</td>"+
              "<td>"+events['day'+i][event].venue+"</td>"+
              "<td>"+events['day'+i][event].round+"</td>"+
            "</tr>"
          );
        }
        else {
          $('#filter_events_body').append(
            "<tr>"+
              "<td>"+events['day'+i][event].fixture+"</td>"+
              "<td>"+events['day'+i][event].name+"</td>"+
              "<td>"+events['day'+i][event].start_tim+"</td>"+
              "<td>"+events['day'+i][event].department.department_name+"</td>"+
              "<td>"+events['day'+i][event].venue+"</td>"+
              "<td>"+events['day'+i][event].round+"</td>"+
            "</tr>"
          );
        }
      }
    }
    if(document.getElementById('filter_events_body').innerHTML == '') {
       document.getElementById("filter_table").style.visibility = "hidden";
    }
    else {
      document.getElementById("filter_table").style.visibility = "";
    }
  }

  var department = document.getElementById('filter_department').value;
  var day = document.getElementById('filter_day').value;

  function fillEventsSelect() {
    var mySet = new Set();
    for(var i=1; i<=4; i++) {
      for(var temp in events['day'+i]) {
        mySet.add(events['day'+i][temp].name);
      }
      $('#filter_event').html('<option>ALL</option>');
      for(let set of mySet) {
        $('#filter_event').append(
          "<option>"+set+"</options>"
        );
      }
    }
  }
  fillEventsSelect();
  $(".filter").on('change', function() {
    RenderTable();
  });

  RenderTable();
  document.getElementById('filter_button').click();

})
