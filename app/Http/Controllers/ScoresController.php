<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ScoresController extends Controller{
  use Validity;
  //request params: department
  public function GetLog(Request $request){
    $data = [];
    if(isset($request['department'])){
      if($this->IsDepartmentValid($request['department'])){
        $department = $request['department'];
        $log = app('db')->select('select * from scores where department = '.$department.'');
        $data['status'] = '200 OK';
        $data['message'] = 'department scores logs found';
        $data['data'] = $log;
      }
      else{
        $data['status'] = '404 NOT FOUND';
        $data['message'] = 'department not found';
        $data['data'] = NULL;
      }
    }
    else{
      $data['status'] = '400 BAD REQUEST';
      $data['message'] = 'missing params';
      $data['data'] = NULL;
    }
    return json_encode($data);
  }

  public function GetEventsScores(Request $request) {
    $data = [];
    $scores = app('db')->select('SELECT * FROM scores GROUP BY event, cast(score as decimal(5,2)) DESC, id, department, created_at, updated_at');
    $data['status'] = '200 OK';
    $data['message'] = 'events scores found';
    $data['data'] = $scores;
    return json_encode($data);
  }
}
