<?php

namespace App\Http\Controllers;

use App\Department;
use App\Event;
use App\Score;

use Laravel\Lumen\Routing\Controller as BaseController;

trait Validity{
    public function IsDayValid($day){
      return ($day <= 3 && $day > 0) || $day == -1;
    }
    public function FindEvent($event_id){
      $event = Event::where('id',$event_id)->first();
      return $event;
    }
    public function EventAlreadyExists($event) {
      $found = app('db')->select('select * from scores where event = "'.$event.'"');
      return (int)(count($found) >= 1);
    }
  }

class Controller extends BaseController
{
    public function GetDay(){
      $day1 = strtotime(getenv('DAY1'));
      $curdate = time();
      $curday = $curdate - $day1;
      $curday = floor($curday / (60 * 60 * 24));
      return response()->json($curday+1, 200);
    }

    public function GetImages() {
      $dir = '../public/images';
      if(is_dir($dir)) {
        if($dh = opendir($dir)) {
          while(($file = readdir($dh)) != false) {
            if($file != "." and $file != "..") {
              $files_array[] = array('lowsrc' => 'images/'.$file,
                                     'fullsrc' => 'images/'.$file,
                                     'category' => 'others'
                                    );
            }
          }
        }
      }
      return response()->json($files_array);
    }

}
