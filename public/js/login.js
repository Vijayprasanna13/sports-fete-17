var Login = React.createClass({
  submit: function(){
      $.ajax({
        type: "POST",
        url: '/auth/login',
        data: {"username":$('#username').val(),"password":$('#password').val()},
        success: function(data){
          if(data == 'success')
            location.href = '/auth/dashboard';

        },
        error: function(data){alert('wrong credentials');}
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
        </div><br/>
          <button onClick={this.submit} className="btn btn-success">Login</button>
      </div>
        );
  }
});
  ReactDOM.render(<Login />,$('#login-form').get(0));
