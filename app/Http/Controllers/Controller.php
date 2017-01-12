<?php

namespace App\Http\Controllers;

use App\Department;
use App\Event;
use App\Score;

use Laravel\Lumen\Routing\Controller as BaseController;

trait Validity{
    public function isDayValid($day){
      return $day <= 3;
    }
    public function isDepartmentCountValid($scores){
        return count($scores) == 11;
    }
    public function isDepartmentValid($department_id){
      $department = Department::select('department_name')->where('id',$department_id)->first();
      return $department['department_name'];
      $departments = array('CSE','ECE','EEE','MECH','ICE','CIVIL','CHEM','PROD','META','ARCH','MTECH','MCA','MSC','DOMS');
      return (int)(in_array($department['department_name'],$departments));
    }
    public function isEventValid($event_id,$day){
      $event = Event::select('name')->where('event_id',$event_id)->first();
      $result = app('db')->select('select * from events where name = "'.$event['name'].'" and day = '.$day.' limit 1');
      return (int)(count($result) == 1);
    }

    public function isImageIdValid($id)
    {
      $found = app('db')->select('select * from photos where image_id = '.$id.'');
      return (int)(count($found) == 1);
    }

    public function departmentExists($department) {
      $found = app('db')->select('select * from departments where department_name = "'.$department.'"');
      return (int)(count($found) == 1);
    }

    public function eventAlreadyExists($event) {
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
