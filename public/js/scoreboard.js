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
    url: 'api/eventscores',
    type: 'GET',

    success: function(data) {
      data = JSON.parse(JSON.stringify(data))['data'];
      $('#events_score').html(" ");
      console.log(data);
      var event = data[0].event;
      var html = '<div class="row">';
      var rowCount = 0;
      for(var item=0; item < data.length; item++) {
        rowCount++;
        html +=
          '<div class="col-sm-4">'+
            '<div class="panel panel-default scoretable">'+
              '<div class="panel-heading">'+
                '<strong>'+data[item].event+'</strong>'+
              '</div>'+
              '<div class="panel-body">';
        html += '<div class="col-xs-6">Department</div><div class="col-xs-6">Score</div>';
        for(; item < data.length && data[item].event === event; item++) {
          html += '<div class="col-xs-6">'+data[item].department+'</div><div class="col-xs-6">'+data[item].score+'</div>';
        }
        html += '</div></div></div>';
        item--;
        if(item+1 < data.length) {
          event = data[item+1].event;
        }
        if(rowCount == 3) {
          rowCount = 0;
          html += '</div><div class="row">';
        }
      }
      html += '</div>';
      $('#events_score').append(html);
    },
    error: function(data) {
      console.log(data);
    }
  });

})
