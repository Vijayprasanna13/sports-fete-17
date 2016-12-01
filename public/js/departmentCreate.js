var Login = React.createClass({
  submit: function(){
      $.ajax({
        type: "POST",
        url: '/api/scores',
        data: {"department":$('#username').val(),"score":$('#password').val()},
        success: function(data){
          data = JSON.parse(data);
          alert('Department created successfully.');
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
          <label htmlfor="username">Department:</label>
          <input type="text" name="username" className="form-control" id="username" />
        </div>
        <div class="form-group">
          <label htmlfor="password">Score:</label>
          <input type="number" name="password" className="form-control" id="password" />
        </div><br/>
          <button onClick={this.submit} className="btn btn-success">Create</button>
      </div>
        );
  }
});
  ReactDOM.render(<Login />,$('#login-form').get(0));
