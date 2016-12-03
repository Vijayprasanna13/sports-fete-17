<html>
    <head>
     <title>Event</title>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
     <link rel="stylesheet" href="/css/event.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="/js/jquery.noty.packaged.min.js"></script>
   <script src="/js/event.js"></script>
</html>
