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
  public function UpdateScores(Request $request){
    $department = $request['department'];
    $data = [];
    if($this->IsDepartmentValid($request['department'])){
      $event = $request['event'];
      $day = $request['day'];
      if($this->IsEventValid($event,$day)){
        $score = $request['score'];
        $event_id = (app('db')->select('select event_id from events where name = "'.(string)$event.'"'))[0]->event_id;
        $department_id = (app('db')->select('select id from departments where department_name = "'.(string)$department.'"'))[0]->id;
        $result = app('db')
        ->insert('insert into
                  scores (deptartment_id,event_id,score,created_at,updated_at)
                  values ('
                  .$department_id.','
                  .$event_id.','
                  .$score.',"'
                  .(string)date('Y-m-d H:i:s').'","'
                  .(string)date('Y-m-d H:i:s').'")'
                );
        $result = app('db')
                  ->update('update departments set
                            score = score + '.$score.',
                            updated_at = "'.(string)date('Y-m-d H:i:s').'"
                            where department_name = "'.$department.'"');
        $data['status'] = '200 OK';
        $data['message'] = 'requested department has been updated';
      }
      else{
        $data['status'] = '409 CONFLICT';
        $data['message'] = 'event not found on given day';
      }
    }
    else{
      $data['status'] = '404 NOT FOUND';
      $data['message'] = 'requested department not found';
    }
    return json_encode($data);
  }
  public function CreateDepartment(Request $request){
    return $request;
  }
}
