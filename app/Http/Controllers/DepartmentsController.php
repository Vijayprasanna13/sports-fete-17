<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DepartmentsController extends Controller{
  use IsDayValid;
  public function GetScores(Request $request){
    $data = [];
    $data['type'] = 'scores';
    $scores = app('db')->select('select department_name, score from departments');
    return count($scores);
  }
  public function PatchScores(Request $request){
    return $request;
  }
  public function CreateDepartment(Request $request){
    return $request;
  }
}
