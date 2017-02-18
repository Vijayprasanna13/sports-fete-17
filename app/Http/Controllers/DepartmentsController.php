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
      if(!$scores = Department::Scores()){
        return response()->json(['error' => 'unable to get scores'],500);
      }
      return response()->json($scores,200);
    }

    /**
    *
    *This method is used to update the score for a department.
    *@param department, event, score
    *@return
    */
    public function AddScore(Request $request){
      if(!isset($request['department']) || !isset($request['score']) || !isset($request['event'])){
        return response()->json('missing parameters',400);
      }
      if(!($department_id = Department::FindDepartmentByName($request['department']))){
        return response()->json('department not found',400);
      }
      $request['department_id'] = $department_id;
      if(Score::FindScore($request['event'], $department_id)){
        return response()->json('event score already added for department', 400);
      }
      if(!(Score::store($request) && Department::UpdateScore($request))){
        return response()->json('internal error',500);
      }
      return response()->json('success', 200);
  }
}
