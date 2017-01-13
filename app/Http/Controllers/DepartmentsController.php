<?php

namespace App\Http\Controllers;

use App\Department;
use App\Score;

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
      $scores = Department::scores();
      if(!$scores){
        return response()->json(['error' => 'unable to get scores'],500);
      }
      return response()->json(['data' => $scores],200);
    }

    /**
    *
    *This method is used to update the score for a department.
    *@param department_id, day, event_id, score
    *@return
    */
    public function UpdateScores(Request $request)
    {
      if(!isset($request['department_id']) &&
         !isset($request['day']) &&
         !isset($request['event_id']) &&
         !isset($request['score']))
         {
           return response()->json(['error' => 'missing parameter'],400);
         }
      if(!Department::findDepartment($request['department_id'])){
          return response()->json(['error' => 'department not found'],400);
      }
      if(!$this->findEvent($request['event_id'],$request['day'])){
          return response()->json(['error'=> 'event not found'],400);
      }
      if(Score::findDepartmentScore($request['event_id'],$request['department_id'])){
        return response()->json(['error' => 'event already added'],409);
      }
      if(!(Department::updateScore($request) && Score::store($request))){
        return response(['error' => 'unable to update'],500);
      }
      return response(['status' => 'added successfully'],200);
    }
}
