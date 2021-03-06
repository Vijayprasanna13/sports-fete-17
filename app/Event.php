<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model{

  protected $table = "events";

  public function department() {
    return $this->belongsTo('App\Department', 'winner', 'id');
  }
  public static function GetEvents() {
    return Event::where('status', 'c')->orderBy('updated_at', 'desc')->get();
  }

  public function Scores() {
    return $this->hasMany('App\Score', 'event_id', 'event_id');
  }
  public static function GetEventsByDay($day) {
    if($day >= 0) {
      $eventstemp = Event::select('id','day','name','venue','start_time','round','status','winner','teama','teamb','fixture')->where('day', $day)->orderBy('start_time')->with('department')->get();
      foreach ($eventstemp as $eventtemp) {
        $eventtemp['winner'] = $eventtemp['department']['department_name'];
        unset($eventtemp['department']);
        $eventtemp['department'] = $eventtemp['winner'];
      }
      return $eventstemp;
    }
    else
      $eventstemp = Event::select('id','day','name','venue','start_time','round','status','winner','teama','teamb','fixture')->orderBy('start_time')->with('department')->get();
      foreach ($eventstemp as $eventtemp) {
        $eventtemp['winner'] = $eventtemp['department']['department_name'];
        unset($eventtemp['department']);
        $eventtemp['department'] = $eventtemp['winner'];
      }
      return $eventstemp;
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
                                        'PROD','META','PHD+MSC','MCA','DOMS','MTECH','ARCH'])
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
    $events = json_decode($events, true);
    foreach ($events as $event) {
      if(in_array($department, $event['participants']))
        array_push($new_events, $event);
    }
    $events = $new_events;
    return $events;
  }

  public static function EventById($event_id){
    $event = Event::select('id','day','name','venue','start_time','round','status','winner','teama','teamb','fixture')->where('id',$event_id)->with('department')->get();
    $event = Event::AddParticipants($event);
    return $event;
  }

  public static function StartEvent($event_id) {
    return Event::where('id', $event_id)->update(['status' => 'l']);
  }

  public static function CompleteEvent($event_id) {
    return Event::where('id', $event_id)->update(['status' => 'c']);
  }

  public static function GetEventList(){
    return Event::select('name')->distinct()->get();
  }
}
