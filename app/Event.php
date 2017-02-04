<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model{

  protected $table = "events";

  public function Scores() {
    return $this->hasMany('App\Score', 'event_id', 'event_id');
  }
  public static function GetEventsByDay($day) {
    if($day >= 0)
      return Event::select('id','day','name','venue','start_time','round','status')->where('day', $day)->orderBy('start_time')->get();
    else
      return Event::select('id','day','name','venue','start_time','round','status')->orderBy('start_time')->get();
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
    $new_events = [];
    $events = Event::GetEventsByDay($day);
    $events = Event::AddParticipants($events);
    //return $events;
    $events = json_decode($events, true);
    foreach ($events as $event) {
      if(in_array($department, $event['participants']))
        array_push($new_events, $event);
    }
    $events = $new_events;
    return $events;
  }

  public static function EventById($event_id){
    $event = Event::select('id','day','name','venue','start_time','round','status')->where('id',$event_id)->get();
    $event = Event::AddParticipants($event);
    return $event;
  }

  public static function StartEvent($event_id) {
    return Event::where('id', $event_id)->update(['status' => 'l']);
  }

  public function CompleteEvent($winner) {
    return Event::where('id', $this->id)->update(['status' => 'c', 'winner' => $winner]);
  }
}
