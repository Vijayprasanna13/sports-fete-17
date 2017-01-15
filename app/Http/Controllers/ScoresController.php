<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;
use App\Event;

class ScoresController extends Controller{
use Validity;

  public function GetEventsScores($event_id) {
    if(!($data = Score::getEventsScores($event_id)))
      return response()->json(['error' => 'unable to find event'],404);

    return response()->json(['data' => $data],200);
  }

  public function GetDepartmentScores($department_id) {
    if(!($data = Score::getDepartmentScores($department_id))) {
      return response()->json(['error' => 'scores not found'], 404);
    }
    return response()->json($data, 200);
  }

  public function getEventsWiseScores() {
    if(!($data = Score::getEventsWiseScores())) {
      return response()->json('scores not found', 404);
    }
    return response()->json($data, 200);
  }

}
