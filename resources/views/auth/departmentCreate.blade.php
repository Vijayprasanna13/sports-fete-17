<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Department</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/departmentCreate.js"></script>
    <script type="text/javascript" src="/js/jquery.noty.packaged.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link rel="stylesheet" href="/css/departmentCreate.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.3">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row" id="header-wrapper">
        <div class="col-sm-2">
          <img src="../images/sports_fete.jpg" id="logo" width="100" height="100"/>
        </div>
        <div class="col-sm-8" id="header">
          SPORTSFETE'17
        </div>
        <div class="col-sm-2">
          <a href="/auth/logout"><img src="../images/logout.png" id="logout" width="50" height="50"/></a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2" id="page_header">
          CREATE DEPARTMENT
        </div>
      </div>
      <div class="row" id="form-wrapper">
        <div class="form-group">
          <div class="row">
            <div class="well well-lg col-sm-4 col-sm-offset-4">
              <label for="department">Department</label>
              <select class="form-control" name="department" id="departmentSelect"></select><br>
              <label for="scores">Scores</label>
              <input type="integer" name="scores" value="0" class="form-control" id="scores">
              <button class="btn btn-primary" id="submit">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
