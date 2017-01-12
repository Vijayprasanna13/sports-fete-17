<?php

namespace App\Http\Controllers;
use App\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    use Validity;
   /**
    * This method returns all scores of all departments
    * in descending order.
    *@param none
    *@return
    */
    public function GetScores(Request $request)
    {
      $data = [];
      $data['status'] = '200 OK';
      $data['message'] = 'scores found';
      $data['scores'] = Department::scores();
      return json_encode($data);
    }

    /**
    *
    *This method is used to update the score for a department.
    *@param department_id, day, event_id, score
    *@return
    */
    public function UpdateScores(Request $request)
    {
      $data = [];
      if(isset($request['department_id']) &&
         isset($request['day']) &&
         isset($request['event_id']) &&
         isset($request['score'])){
           $data['status'] = '400 BAD REQUEST';
           $data['message'] = 'missing params';
           return json_encode($data);
         }
      if(!$this->isDepartmentValid($request['department_id'])){
          $data['status'] = '400 BAD REQUEST';
          $data['message'] = 'Department not found';
          return json_encode($data);
      }
      if(!$this->isEventValid($request['event_id'],$request['day'])){
          $data['status'] = '400 BAD REQEUST';
          $data['message'] = 'Event not found on given Day';
          return json_encode($data);
      }
      if(Department::isEventAdded($request['event_id'])){

      }
    }
}
