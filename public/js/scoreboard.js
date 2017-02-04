$(document).ready(function() {

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
                "<td>"+data[x].name+"</td>"+
                "<td>"+data[x].winner+"</td>"+
              "</tr>"
            );
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

})
