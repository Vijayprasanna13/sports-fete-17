<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model{

  protected $table = "events";

  public function Scores() {
    return $this->hasMany('App\Score', 'event_id', 'event_id');
  }
  public static function GetEventsByDay($day) {
    return Event::select('id','name','venue','start_time')->where('day', $day)->orderBy('start_time')->get();
  }

  /**
  *This method groups departments participating in the given event_id
  *under the label 'participants'. Could Write it better:/
  *@param array of objects from SQL output from events table
  *@return
  */
  public static function AddParticipants($events){
      foreach ($events as $event) {
      $validparticipants = [];
      $participants = Event::select(['CSE','ECE','EEE','MECH','CHEM','ICE','CIVIL',
                                        'PROD','META','MSC','MCA','DOMS','MTECH','ARCH'])
                              ->where('id',$event->id)
                              ->first();
      $participants = json_decode($participants,true);
      foreach ($participants as $key => $value) {
        if($value)
          array_push($validparticipants, $key);
      }
      $event['participants'] = $validparticipants;
    }
    return $events;
}

  /**
  * This function filters the events array (with the particants) to contain the
  * only the elements with the requested department in it. 
  *@param events, department
  *@return 
  */
  public static function FilterByDepartment($day, $department){
    $events = Event::GetEventsByDay($day);
    $event = Event::AddParticipants($events);
    foreach ($events as $key => $value) {
      if(!in_array($department,$value['participants']))
        unset($events[$key]);
    }
    return $events;
  }
}