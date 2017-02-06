var days = [1, 2, 3];
$.ajax({
  url: 'api/events/day/'+days[0],
  type: 'GET',

  success: function(data) {
    $('#events_body_day1').html(" ");
    for(var event in data) {
      if(data[event].department == null) {
        data[event].department = {department_name: "---"}
      }
      if(data[event].status == "c") {
        data[event].start_time = "Completed";
      }
      if(data[event].status == "l") {
        data[event].start_time = "Live";
      }
      if(data[event].participants.length == 2) {
        $('#events_body_day1').append(
          "<tr>"+
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
      if(data[event].department == null) {
        data[event].department = {department_name: "---"}
      }
      if(data[event].status == "c") {
        data[event].start_time = "Completed";
      }
      if(data[event].status == "l") {
        data[event].start_time = "Live";
      }
      if(data[event].participants.length == 2) {
        $('#events_body_day2').append(
          "<tr>"+
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
      if(data[event].department == null) {
        data[event].department = {department_name: "---"}
      }
      if(data[event].status == "c") {
        data[event].start_time = "Completed";
      }
      if(data[event].status == "l") {
        data[event].start_time = "Live";
      }
      if(data[event].participants.length == 2) {
        $('#events_body_day3').append(
          "<tr>"+
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
