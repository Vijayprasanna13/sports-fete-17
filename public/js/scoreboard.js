$(document).ready(function() {

  //To display scores scored in each events
  $.ajax({
    url: 'api/eventscores',
    type: 'GET',

    success: function(data) {
      data = JSON.parse(data)['data'];
      $('#events_score').html(" ");
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
