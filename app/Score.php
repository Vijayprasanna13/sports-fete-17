<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Score extends Model{
  protected $table = "scores";
  public static function store(Request $request){
    $score = new Score;
    $score->department_id = $request['department_id'];
    $score->event_id = $request['event_id'];
    $score->score = $request['score'];
    return $score->save();
  }
  public static function findDepartmentScore($department_id,$event_id){
    return $score = Score::where(['department_id' => $department_id,'event_id' => $event_id])->first();
  }
  public static function getEventsScores($event_id) {
    return Score::where('event_id',$event_id)->get();
  }
  public static function getDepartmentScores($department_id) {
    return Score::select(DB::raw('SUM(score) as score, event_id'))
                  ->where('department_id', $department_id)
                  ->groupBy('event_id')
                  ->havingRaw('SUM(score) > 0')
                  ->get();
  }

}
