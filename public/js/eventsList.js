var days = [1, 2, 3];
$.ajax({
  url: 'api/events/'+days[0],
  type: 'GET',

  success: function(data) {
    data = data['data'];
    $('#events_body_day1').html(" ");
    for(var event in data) {
      var dt = data[event].start_time.split(/[- :]/);
      var eventDate = new Date(dt[0], dt[1]-1, dt[2], dt[3], dt[4], dt[5]);
      $('#events_body_day1').append(
        "<tr>"+
          "<td>"+dt[2]+"-"+dt[1]+"-"+dt[0]+"</td>"+
          "<td>"+data[event].name+"</td>"+
          "<td>"+dt[3]+":"+dt[4]+"</td>"+
          "<td>"+data[event].venue+"</td>"+
        "</tr>"
      );
    }
  },
  error: function(data) {
    console.log(data);
  }
})
$.ajax({
  url: 'api/events/'+days[1],
  type: 'GET',

  success: function(data) {
    data = data['data'];
    $('#events_body_day2').html(" ");
    for(var event in data) {
      var dt = data[event].start_time.split(/[- :]/);
      var eventDate = new Date(dt[0], dt[1]-1, dt[2], dt[3], dt[4], dt[5]);
      $('#events_body_day2').append(
        "<tr>"+
          "<td>"+dt[2]+"-"+dt[1]+"-"+dt[0]+"</td>"+
          "<td>"+data[event].name+"</td>"+
          "<td>"+dt[3]+":"+dt[4]+"</td>"+
          "<td>"+data[event].venue+"</td>"+
        "</tr>"
      );
    }
  },
  error: function(data) {
    console.log(data);
  }
})
$.ajax({
  url: 'api/events/'+days[2],
  type: 'GET',

  success: function(data) {
    data = data['data'];
    $('#events_body_day3').html(" ");
    for(var event in data) {
      var dt = data[event].start_time.split(/[- :]/);
      var eventDate = new Date(dt[0], dt[1]-1, dt[2], dt[3], dt[4], dt[5]);
      $('#events_body_day3').append(
        "<tr>"+
          "<td>"+dt[2]+"-"+dt[1]+"-"+dt[0]+"</td>"+
          "<td>"+data[event].name+"</td>"+
          "<td>"+dt[3]+":"+dt[4]+"</td>"+
          "<td>"+data[event].venue+"</td>"+
        "</tr>"
      );
    }
  },
  error: function(data) {
    console.log(data);
  }
})
