<html>
    <head>
     <title>Event</title>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="/js/jquery.noty.packaged.min.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <style>
   #header-wrapper {
     background-color: #E74C3C;
     opacity: 1;
     border-bottom: 3px solid #C0392B;
   }
   #header {
     padding: 1%;
     text-align: center;
     font-size: 150%;
     font-family: Bungee;
   }
   #form-wrapper {
     margin-top: 2%;
   }
   #event-form {
     display: none;
   }
   </style>
   <body>
     <div class="containter-fluid">
        <div class="row" id="header-wrapper">
          <div class="col-sm-12" id="header">
            Add Scores
          </div>
      </div>
      <div class="row" id="form-wrapper">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="form-group">
              <div id="day-form" class="well">
                <b>Day: </b>
                <input type="integer" name="day" id="day" class="form-control"/><br/>
                <button class="btn btn-default" id="day-submit">Submit Day</button>
              </div>
              <div id="event-form" class="well">
                <b>Event: </b>
                <select class="form-control" id="event"></select><br/>
                <b>First : </b>
                <select class="form-control" id="first-place"></select>
                <b>Second : </b>
                <select class="form-control" id="second-place"></select>
                <b>Third : </b>
                <select class="form-control" id="third-place"></select><br/>
                <button class="btn btn-success" id="submit">Submit</button>
              </div>
            </div>
        </div>
      </div>
     </div>
   </body>
   <script>
    $(document).ready(function(){
      $('#day-submit').click(function(){
        var day = $('#day').val();
        var depts = ['---','CSE','ECE','EEE','MECH','ICE','CIVIL','CHEM','PROD','META','ARCH'];
        $.map(depts,function(department,i){
          $('#first-place').append('<option>'+department+'</option>');
          $('#second-place').append('<option>'+department+'</option>');
          $('#third-place').append('<option>'+department+'</option>');
        });
        $.ajax({
          url: "/api/events",
          data: {"day":day},
          type: "GET",
          success: function(data){
            $('#event').html(" ");
            $('#event-form').fadeIn("fast");
            data = JSON.parse(data);
            $.map(data['data'],function(data,i){
                $('#event').append("<option>"+data['name']+"</option>");
            });
          },
          error: function(data){console.log(data);}
        });
      });
      $('#submit').click(function(){
        var departments = [];
        var day = $('#day').val();
        var event = $('#event').val();
        departments.push($('#first-place').val());
        departments.push($('#second-place').val());
        departments.push($('#third-place').val());
        $.map(departments,function(department,i){
          $.ajax({
            url: '/api/scores',
            type: 'POST',
            data: {"day":day,"department":department,"position":i+1,"event":event},
            success: function(data){if(i == 2)var n = noty({text: '<h2><b>successfully updated</b></h2><br/>click to dismiss',type:'success'});},
            error: function(data){console.log(data);}
          });
        });
      });
    });
   </script>
</html>
