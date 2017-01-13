<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;

class ScoresController extends Controller{
  use Validity;
  
  public function GetEventsScores(Request $request) {
    $data = Score::getEventsScores($request['event_id']);
    if(!$data)
      return response()->json(['error' => 'unable to find event'],400);
    return response()->json(['data' => $data],200);
  }

}
