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
        <div class="col-sm-6 col-sm-offset-3">
            <div class="form-group">
              <div id="day-form" class="well">
                <b>Day: </b>
                <input type="integer" name="day" id="day" class="form-control"/><br/>
              </div>
              <div id="event-form" class="well">
                <b>Event: </b>
                <select class="form-control" id="event"></select><br/>
                <div id="department-wrapper">
                  <div class="row">
                    <div class="col-sm-2 well box">CSE : <input id="CSE" value=0 type="integer" class="form-control" placeholder="0"></div>
                    <div class="col-sm-2 well box">ECE : <input id="ECE" value=0 type="integer" class="form-control" placeholder="0"></div>
                    <div class="col-sm-2 well box">EEE : <input id="EEE" value=0 type="integer" class="form-control" placeholder="0"></div>
                    <div class="col-sm-2 well box">MECH : <input id="MECH" value=0 type="integer" class="form-control" placeholder="0"></div>
                    <div class="col-sm-2 well box">ICE : <input id="ICE"  value=0 type="integer" class="form-control" placeholder="0"></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2 well box">CHEM : <input id="CHEM" value=0 type="integer" class="form-control" placeholder="0"></div>
                    <div class="col-sm-2 well box">META : <input id="META" value=0 type="integer" class="form-control" placeholder="0"></div>
                    <div class="col-sm-2 well box">CIVIL : <input id="CIVIL" value=0 type="integer" class="form-control" placeholder="0"></div>
                    <div class="col-sm-2 well box">PROD : <input id="PROD" value=0 type="integer" class="form-control" placeholder="0"></div>
                    <div class="col-sm-2 well box">ARCH : <input id="ARCH" value=0 type="integer" class="form-control" placeholder="0"></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2 well box">MTECH : <input id="MTECH" value=0 type="integer" class="form-control" placeholder="0"></div>
                    <div class="col-sm-2 well box">MCA : <input id="MCA" value=0 type="integer" class="form-control" placeholder="0"></div>
                    <div class="col-sm-2 well box">MSC : <input id="MSC" value=0 type="integer" class="form-control" placeholder="0"></div>
                    <div class="col-sm-2 well box">DOMS : <input id="DOMS" value=0 type="integer" class="form-control" placeholder="0"></div>
                  </div>
                </div>
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
