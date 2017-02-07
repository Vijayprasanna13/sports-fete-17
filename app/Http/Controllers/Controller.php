<?php

namespace App\Http\Controllers;

use App\Department;
use App\Event;
use App\Score;

use Laravel\Lumen\Routing\Controller as BaseController;

trait Validity{
    public function IsDayValid($day){
      return ($day <= 4 && $day > 0) || $day == -1;
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
            $excluded_files = ['.', '..', 'secret', 'fixtures', 'contacts', 'homepage', 'carousel'];
            if(!in_array($file, $excluded_files)) {
              if(is_dir($dir.'/'.$file)) {
                $sub_dir = $dir.'/'.$file;
                if($dh1 = opendir($sub_dir)) {
                  while(($file1 = readdir($dh1)) != false) {
                    if($file1 != "." and $file1 != "..") {
                      $files_array[] = array('lowsrc' => 'images/'.$file.'/'.$file1,
                                             'fullsrc' => 'images/'.$file.'/'.$file1,
                                             'category' => $file
                                            );
                    }
                  }
                }
              }
              // else {
              //   $files_array[] = array('lowsrc' => 'images/'.$file,
              //                          'fullsrc' => 'images/'.$file,
              //                         );
              // }
            }
          }
        }
      }
      return response()->json($files_array);
    }

}
