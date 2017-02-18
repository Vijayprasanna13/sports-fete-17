<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;
use App\Event;

class ScoresController extends Controller{
use Validity;
  
  /**
  *
  *This function gets the score of a given event
  *@param event id
  *@return
  */
  public function GetEventsScores($event_id) {
    if(!($data = Score::getEventsScores($event_id)))
      return response()->json(['error' => 'unable to find event'],404);

    return response()->json($data,200);
  }

  /**
  *
  *This function returns the score of a department
  *@param department id
  *@return
  */
  public function GetDepartmentScores($department_id) {
    if(!($data = Score::getDepartmentScores($department_id))) {
      return response()->json(['error' => 'scores not found'], 404);
    }
    return response()->json($data, 200);
  }

  /**
  *
  *This scores of a particular event cluster (column name - 'name' in `events` table)
  *@param 
  *@return
  */
  public function GetEventsWiseScores() {
    if(!($data = Score::getEventsWiseScores())) {
      return response()->json('scores not found', 404);
    }
    return response()->json($data, 200);
  }

}
