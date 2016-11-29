var Login = React.createClass({
  submit: function(){
      $.ajax({
        type: "POST",
        url: '/auth/login',
        data: {"username":$('#username').val(),"password":$('#password').val()},
        success: function(data){
          data = JSON.parse(data);
          console.log(data['status']);
          if(data['status'] == '200 Authorized')
            window.location.href = '/auth/dashboard';
        },
        error: function(){console.log('error');}
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
          <button onClick={this.submit} className="btn btn-success">Submit</button>
      </div>
        );
  }
});
  ReactDOM.render(<Login />,$('#login-form').get(0));
