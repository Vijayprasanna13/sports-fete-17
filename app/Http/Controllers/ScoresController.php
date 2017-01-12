<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;

class ScoresController extends Controller{
  use Validity;
  //request params: department
  public function GetLog(Request $request){
    $data = [];
    if(!isset($request['department'])) {
      $data['status'] = '400 BAD REQUEST';
      $data['message'] = 'missing params';
      return json_encode($data);
    }

    $department = $request['department'];

    if(!$this->isDepartmentValid($request['department_id'])) {
      $data['status'] = '404 NOT FOUND';
      $data['message'] = 'department not found';
      $data['data'] = NULL;
      return json_encode($data);
    }

    $data['status'] = '200 OK';
    $data['message'] = 'department scores logs found';
    $data['data'] = Score::getDepartmentScore($department);
    return json_encode($data);
  }

  public function GetEventsScores(Request $request) {
    $data = [];
    $data['status'] = '200 OK';
    $data['message'] = 'events scores found';
    $data['data'] = Score::getEventsScores();
    return json_encode($data);
  }
}
