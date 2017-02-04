<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller{
    use Validity;

    /**
    *This function return the events for the given day
    *and the participating departments
    *@param day
    *@return
    */
    public function GetEventsByDay($day){
      if(!$this->IsDayValid($day)) {
        return response()->json('day not found', 404);
      }
      if(!($events = Event::GetEventsByDay($day))) {
        return response()->json('events not found', 404);
      }
      if(!($events = Event::AddParticipants($events))){
        return response()->json('grouping gone wrong',400);
      }
      return response()->json($events, 200);

  }

  /**
  *
  *This function return the list of all events for the department
  *@param department
  *@return
  */
  public function GetEventsByDepartment($day,$department){
    if(!$this->IsDayValid($day)){
      return response()->json('day not found',404);
    }
    $events = Event::FilterByDepartment($day,$department);
    return $events;
  }

  /**
  *This function return the event by id
  *@param event id
  *@return 
  */
  public function GetEventById($event_id){
    if(!$this->FindEvent($event_id)){
      return response()->json('event not found',400);
    }
    $event = Event::EventById($event_id);
    return response()->json($event,200);
  }

  public function StartEvent($event_id) {
    if(!Event::find($event_id)) {
      return response()->json('event not found', 404);
    }
    if(!Event::StartEvent($event_id)) {
      return response()->json('cannot update event status', 500);
    }
    return response()->json('event status changed', 200);
  }

  public function CompleteEvent($event_id) {
    if(!Event::find($event_id)) {
      return response()->json('event not found', 404);
    }
    if(!Event::CompleteEvent($event_id)) {
      return response()->json('cannot update event status', 500);
    }
    return response()->json('event status changed', 200);
  }

  public function Authenticate(Request $request){
       // dev mode: login automatically; APP_ENV defaults to local
        /*if (env('APP_ENV', 'local') != 'production') {
            return true;
        }        
        */
        // Attempt IMAP
        $rollno = $request['rollno'];
        $password = $request['password'];
        $imap_token =
            @\imap_open(
                "{vayu.nitt.edu:993/imap/ssl/novalidate-cert}",
                $rollno,
                $password,
                0, 1
            );
        if ($imap_token != false) {
            return true;
        }
        return false;
  }

}
