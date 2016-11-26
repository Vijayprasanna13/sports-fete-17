<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DepartmentsController extends Controller{
  use Vaildity;
  public function GetScores(Request $request){
    $data = [];
    $data['type'] = 'scores';
    $scores = app('db')->select('select department_name, score from departments');
    if($this->IsDepartmentCountValid($scores)){
      $data['status'] = '200 OK';
      $data['message'] = 'department scores found';
      $data['data'] = $scores;
    }
    else{
      $data['status'] = '500 ERROR';
      $data['message'] = 'department count offset';
      $data['data'] = NULL;
    }
    return json_encode($data);
  }
  public function PatchScores(Request $request){
    return $request;
  }
  public function CreateDepartment(Request $request){
    return $request;
  }
}
