<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ScoresController extends Controller{
  public function GetLog(Request $request){
    $department_id = (app('db')->select('select id from departments where department_name = "'.(string)($request['department']).'"'))[0]->id;
    $log = app('db')->select('select * from scores where department_id = '.$department_id.'');
    return $log;
  }
}
