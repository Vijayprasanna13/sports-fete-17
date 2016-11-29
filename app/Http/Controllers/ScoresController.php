<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
session_start();
class ScoresController extends Controller{
  use Validity;
  public function GetLog(Request $request){
    $data = [];
    if(isset($request['department'])){
      if($this->IsDepartmentValid($request['department'])){
        $department_id = (app('db')->select('select id from departments where department_name = "'.(string)($request['department']).'"'))[0]->id;
        $log = app('db')->select('select * from scores where department_id = '.$department_id.'');
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
}
