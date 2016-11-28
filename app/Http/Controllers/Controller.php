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
      $departments = array('CSE','ECE','EEE','MECH','ICE','CIVIL','CHEM','PROD','META','MCA','ARCH');
      return (int)(in_array($department,$departments));
    }
    public function IsEventValid($event,$day){
      return (int)(count($result) == 1);
      $result = app('db')->select('select * from events where name = "'.$event.'" and day = '.$day.' limit 1');
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
  }

class Controller extends BaseController
{
    //
}
