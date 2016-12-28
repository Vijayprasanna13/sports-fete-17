<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    use Validity;
    //request params: none
    public function GetScores(Request $request)
    {
        $data = [];
        $data['type'] = 'scores';
        $scores = app('db')->select('select department_name, score from departments order by cast(score as decimal(5,2)) desc');
        if ($this->IsDepartmentCountValid($scores)) {
            $data['status'] = '200 OK';
            $data['message'] = 'department scores found';
            $data['data'] = $scores;
        } else {
            $data['status'] = '500 ERROR';
            $data['message'] = 'department count offset';
            $data['data'] = null;
        }

        return json_encode($data);
    }
    //Request params: department, day, event, score
    public function UpdateScores(Request $request)
    {
        $department = $request['department'];
        $data = [];
        if (isset($request['department']) && isset($request['day']) && isset($request['event'])) {
            if($request['requestCount'] == 0 || $request['isSuccess'] == 'failure') {
              if($this->eventAlreadyExists((string)$request['event']) || $request['isSuccess'] == 'failure') {
                $data['status'] = '409 CONFLICT';
                $data['message'] = 'Event already added.';
                $data['isSuccess'] = 'failure';
                return json_encode($data);
              }
            }
            if($request['score'] == 0) {
              $data['status'] = '200 OK';
              $data['message'] = 'requested department has been updated';
              $data['isSuccess'] = 'success';
              return json_encode($data);
            }
            if ($this->IsDepartmentValid($request['department'])) {
                $department = (string)$department;
                $event = (string)$request['event'];
                $day = $request['day'];
                if ($this->IsEventValid($event, $day)) {
                    //$score = $this->GetScoreByPosition($request['event'],$request['position'])[0]->score;
                    $score = $request['score'];
                    $result = app('db')
                    ->insert('insert into
                    scores (department,event,score,created_at,updated_at)
                    values ("'
                    .$department.'","'
                    .$event.'",'
                    .$score.',"'
                    .(string) date('Y-m-d H:i:s').'","'
                    .(string) date('Y-m-d H:i:s').'")'
                  );
                    $result = app('db')
                    ->update('update departments set
                              score = score + '.$score.',
                              updated_at = "'.(string) date('Y-m-d H:i:s').'"
                              where department_name = "'.$department.'"');
                    $data['status'] = '200 OK';
                    $data['message'] = 'requested department has been updated';
                    $data['isSuccess'] = 'success';
                } else {
                    $data['status'] = '409 CONFLICT';
                    $data['message'] = 'event not found on given day';
                    $data['isSuccess'] = 'success';
                }
            } else {
                $data['status'] = '404 NOT FOUND';
                $data['message'] = 'requested department not found';
                $data['isSuccess'] = 'success';
            }
        } else {
            $data['status'] = '400 BAD REQUEST';
            $data['message'] = 'missing params';
            $data['isSuccess'] = 'success';
        }

        return json_encode($data);
    }

    //not actually needed, remove after completion
    public function CreateDepartment(Request $request)
    {
        $data = [];
        if (isset($request['department']) && isset($request['score'])) {
            if (!$this->DepartmentExists($request['department']) && $this->IsDepartmentValid($request['department'])) {
                $result = app('db')
                  ->insert('insert into
                            departments (department_name,score,updated_at,created_at)
                            values (
                              "'.(string) $request['department'].'",
                              '.$request['score'].',
                              "'.(string) date('Y-m-d H:i:s').'",
                              "'.(string) date('Y-m-d H:i:s').'")
                          ');
                if ($result) {
                    $data['status'] = '200 OK';
                    $data['message'] = 'department has been added';
                } else {
                    $data['status'] = '500 ERROR';
                    $data['message'] = 'internal error';
                }
            } else {
                $data['status'] = '409 CONFLICT';
                $data['message'] = 'department already exists';
            }
        } else {
            $data['status'] = '400 BAD REQUEST';
            $data['message'] = 'missing params';
        }

        return json_encode($data);
    }
}
