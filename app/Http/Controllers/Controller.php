<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

trait Vaildity{
    public function IsDayValid($day){
      return $day <= 3;
    }
    public function IsDepartmentCountValid($scores){
        return count($scores) == 11;
    }
  }

class Controller extends BaseController
{
    //
}
