<html>
  <head>
    <title>
      Login Page
    </title>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <script src="../js/jquery-3.1.1.min.js"></script>
     <script src="../js/babel.min.js"></script>
     <script src="../js/react.min.js"></script>
     <script src="../js/react-dom.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  <body>
    <div id="login-form" class="col-sm-5 col-centered">
    </div>
  </body>

  <script type="text/babel">
  var Login = React.createClass({
    submit: function(){
        $.ajax({
          type: "POST",
          url: '/auth/login',
          data: {"username":$('#username').val(),"password":$('#password').val()}
          success: function(){console.log('success')},
          error: function(){console.log('error')}
        });
    },
    render: function(){
      return (
        <div>
          <div className="form-group">
            <label htmlfor="username">Username:</label>
            <input type="text" name="username" className="form-control" id="username" />
          </div>
          <div class="form-group">
            <label htmlfor="password">Password:</label>
            <input type="password" name="password" className="form-control" id="password" />
          </div>
            <button onClick={this.submit} className="btn btn-success">Submit</button>
        </div>
          );
    }
  });
    ReactDOM.render(<Login />,$('#login-form').get(0));
  </script>
</html>
