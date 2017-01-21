<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model{

  protected $table = "events";

  public function Scores() {
    return $this->hasMany('App\Score', 'event_id', 'event_id');
  }
  public static function GetEventsByDay($day) {
    return Event::where('day', $day)->orderBy('start_time')->get();
  }

  /**
  *This method groups departments participating in the given event_id
  *under the label 'participants'. Could Write it better:/
  *@param array of objects from SQL output from events table
  *@return 
  */
  public static function AddParticipants($events){
    $departments = ['CSE','EEE','ECE','MECH','ICE','MECH','CIVL','CHEM','PROD','META','MSC','MTECH','DOMS','ARCH','MCA'];
    foreach ($events as $event) {
      $event->participants = [
                              'CSE' => $event['CSE'],
                              'EEE' => $event['EEE'],
                              'ECE' => $event['ECE'],
                              'ICE' => $event['ICE'],
                              'MECH' => $event['MECH'],
                              'CIVIL' => $event['CIVIL'],
                              'CHEM' => $event['CHEM'],
                              'PROD' => $event['PROD'],
                              'META' => $event['META'],
                              'MSC' => $event['MSC'],
                              'MTECH' => $event['MTECH'],
                              'DOMS' => $event['DOMS'],
                              'ARCH' => $event['ARCH'],
                              'MCA' => $event['MCA']
                            ];
      foreach ($departments as $department) {
        unset($event->$department);
      }
    }
    return $events;
  }
}
