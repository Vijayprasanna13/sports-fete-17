<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

trait IsDayValid{
    public function CheckDay($day){
      return $day <= 3;
    }
  }
  
trait CheckDepartmentCount($departments){
  return $count == 11;
}

class Controller extends BaseController
{
    //
}
