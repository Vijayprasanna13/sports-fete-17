<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

trait Validity{
    public function IsDayValid($day){
      return $day <= 3;
    }
    public function IsDepartmentCountValid($scores){
        return count($scores) == 11;
    }
    public function IsDepartmentValid($department){
      $departments = array('CSE','ECE','EEE','MECH','ICE','CIVIL','CHEM','PROD','META','ARCH','MTECH','MCA','MSC','DOMS');
      return (int)(in_array($department,$departments));
    }
    public function IsEventValid($event,$day){
      $result = app('db')->select('select * from events where name = "'.$event.'" and day = '.$day.' limit 1');
      return (int)(count($result) == 1);
    }

    public function IsImageIdValid($id)
    {
      $found = app('db')->select('select * from photos where image_id = '.$id.'');
      return (int)(count($found) == 1);
    }

    public function DepartmentExists($department) {
      $found = app('db')->select('select * from departments where department_name = "'.$department.'"');
      return (int)(count($found) == 1);
    }

    public function eventAlreadyExists($event) {
      $event_id = app('db')->select('select * from events where name = "'.$event.'"')[0]->event_id;
      $found = app('db')->select('select * from scores where event_id = '.$event_id.'');
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
