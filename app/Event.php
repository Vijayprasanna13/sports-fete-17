<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model{

  protected $table = "events";

  public function scores() {
    return $this->hasMany('App\Score', 'event_id', 'event_id');
  }

  public static function getEventsByDay($day) {
    return Event::where('day', $day)->orderBy('start_time')->get();
  }
}
