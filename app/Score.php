<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Score extends Model{
  protected $table = "scores";
  public static function store(Request $request){
    $score = new Score;
    $score->department_id = $request['department_id'];
    $score->event_id = $request['event_id'];
    $score->score = $request['score'];
    return $score->save();
  }
  public static function isEventAdded($event_id,$department_id){
    return Score::select('id')->where(['event_id' => $event_id, 'department_id' => $department_id])->first();
  }

  public static function getDepartmentScore($department) {
      return Score::where('department', $department)->get();
    }

  public static function getEventsScores() {
      return Score::orderBy('event')->orderByRaw('CAST(score AS DECIMAL(5,2)) DESC')->get();
    }

}
