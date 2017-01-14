<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;

class ScoresController extends Controller{
use Validity;
  public function GetLog(Request $request) {
    //funtion to be used when a scores for a particular department is to be displayed when clicked on a department in leaderboard

    if(!isset($request['department_id'])) {
      return response()->json(['error' => 'missing parameter'], 400);
    }

    if(!$this->isDepartmentValid($request['department_id'])) {
      return response()->json(['error' => 'department not found'], 404);
    }

    $departmentScore = Score::getDepartmentScores($request['department_id']);
    return response()->json(['data' => $departmentScore], 200);
  }

  public function GetEventsScores(Request $request) {
    $data = Score::getEventsScores($request['event_id']);
    if(!$data)
      return response()->json(['error' => 'unable to find event'],400);
    return response()->json(['data' => $data],200);
  }

  public function GetDepartmentScores(Request $request) {
    if(!$data = Score::getDepartmentScores($request['department_id'])) {
      return response()->json(['error' => 'scores not found'], 400);
    }
    return response()->json($data, 200);
  }

}
