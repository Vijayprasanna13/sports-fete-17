<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model{

  protected $table = "events";

  public static function getEventsByDay($day) {
    return Event::where('day', $day)->orderBy('start_time')->get();
  }
}
