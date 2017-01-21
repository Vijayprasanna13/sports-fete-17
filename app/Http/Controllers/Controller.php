<?php

namespace App\Http\Controllers;

use App\Department;
use App\Event;
use App\Score;

use Laravel\Lumen\Routing\Controller as BaseController;

trait Validity{
    public function IsDayValid($day){
      return $day <= 3;
    }
    public function IsDepartmentCountValid($scores){
        return count($scores) == 11;
    }
    public function IsDepartmentValid($department_id){
      $department = Department::select('department_name')->where('id',$department_id)->first();
      return $department['department_name'];
    }
    public function FindEvent($event_id,$day){
      $event = Event::select('event_id')->where('event_id',$event_id)->where('day',$day)->first();
      return (bool) $event;
    }
    public function EventAlreadyExists($event) {
      $found = app('db')->select('select * from scores where event = "'.$event.'"');
      return (int)(count($found) >= 1);
    }
  }

class Controller extends BaseController
{
    public function GetDay(){
      $day = app('db')->select("select * from days where id = 1")[0]->day;
      return $day;
    }
}
