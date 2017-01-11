<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{

  protected $table = "scores";

  public static function getDepartmentScore($department) {
    return Score::where('department', $department)->get();
  }

  public static function getEventsScores() {
    return Score::orderBy('event')
                  ->orderByRaw('CAST(score AS DECIMAL(5,2)) DESC')->get();
  }

}
