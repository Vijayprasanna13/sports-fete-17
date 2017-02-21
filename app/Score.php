<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Score extends Model{

  protected $table = "scores";

  public function event() {
    return $this->belongsTo('App\Event');
  }

  public function department() {
    return $this->belongsTo('App\Department', 'department_id', 'id');
  }

  public static function store(Request $request){
    $score = new Score;
    $score->department_id = $request['department_id'];
    $score->event = $request['event'];
    $score->score = $request['score'];
    return (int) $score->save();
  }

  public static function findDepartmentScore($department_id,$event_id){
    return Score::where(['department_id' => $department_id,'event_id' => $event_id])->first();
  }

  public static function FindScore($event, $department_id) {
    return count(Score::where('event',$event)->where('department_id',$department_id)->get());
  }

  public static function getEventsWiseScores() {
    return Score::orderBy('event_id')
                  ->orderByRaw('CAST(score AS DECIMAL(5,2)) DESC')
                  ->with('department', 'event')
                  ->get();
  }

  public static function getDepartmentScores($department_id) {
    return Score::select(DB::raw('SUM(score) as score, event'))
                  ->where('department_id', $department_id)
                  ->groupBy('event')
                  ->havingRaw('SUM(score) > 0')
                  ->get();
  }

  public static function Scores() {
    $scores =  Score::select(DB::raw('SUM(score) as score, department_id'))
                      ->groupBy('department_id')
                      ->orderByRaw('score DESC')
                      // ->orderByRaw('CAST(score AS DECIMAL(5,2)) DESC')
                      ->with('department')
                      ->get();
    foreach ($scores as $score) {
      $score['department_name'] = $score['department']['department_name'];
      $score['id'] = $score['department_id'];
      unset($score['department']);
      unset($score['department_id']);
    }
    return $scores;
  }
}
