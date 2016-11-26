<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

trait IsDayValid{
    public function CheckDay($day){
      return $day <= 3;
    }
  }
  
class Controller extends BaseController
{
    //
}
