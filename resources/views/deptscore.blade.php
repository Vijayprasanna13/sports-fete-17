@extends('layouts/base')

@section('title', 'dept')


@section('body')
  <style media="screen">
  .container {
    padding-top: 15vh;
  }

  #departmentScoreboard td {
    letter-spacing: 2px;
    padding: 10px 0px !important;
    text-transform: uppercase;
  }

  #departmentScoreboard tr {
    background-color: #F59065;
    font-family: Bungee;
  }

  #departmentScoreboard th {
    letter-spacing: 4px;
    padding: 10px 10px !important;
    color: #ffffff;
    font-size: 20px;
    font-family: Bungee;
    text-align: center;
    background-color: #F36223;
    font-weight: normal;
  }
  </style>
  <body>
@endsection

@section('content')
  <div class="container" id="departmentScoreboard">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 table-responsive">
        <table class="table table-striped text-center">
          <thead>
            <tr>
              <th colspan="3">{{$department_name}} Scoreboard</th>
            </tr>
            <tr>
              <th>Event</th>
              <th>Score</th>
            </tr>
          </thead>
          <tbody id="scoreboardBody">

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <p id="test"></p>

  <script type="text/javascript">
    $(document).ready(function() {
      var departmentName = {!!json_encode($department_name) !!};
      var departmentId = {!!$department_id!!}
      $.ajax({
        url: '../api/departmentscores',
        type: 'GET',
        data: {'department_id': departmentId},

        success: function(data) {
          data = JSON.parse(JSON.stringify(data));
          console.log(data);
          for(var x in data) {
            $('#scoreboardBody').append(
                "<tr>"+
                  "<td>"+data[x].event_name+"</td>"+
                  "<td>"+data[x].score+"</td>"+
                "</tr>"
              );
          }
        },
        error: function(data) {
          console.log(data);
        }
      })
    })
  </script>
@endsection
