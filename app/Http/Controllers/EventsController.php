<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Department;
use App\Marathon;

class EventsController extends Controller{
    use Validity;

    /**
    *This function returns the 'event groups'
    *
    *@param none
    *@return
    */
    public function GetEvents() {
      if(!$data = Event::GetEvents()) {
        return response()->json('internal server error', 500);
      }
      return response()->json($data, 200);
    }

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
  public function GetEventsByDepartment($day, $department){
    if(!$this->IsDayValid($day)){
      return response()->json('day not found',404);
    }
    $events = Event::FilterByDepartment($day, $department);
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

/**
*
*This function sets the event status to 's'
*@param event id
*@return
*/
  public function StartEvent($event_id) {
    if(!Event::find($event_id)) {
      return response()->json('event not found', 404);
    }
    if(!Event::StartEvent($event_id)) {
      return response()->json('cannot update event status', 500);
    }
    return response()->json('event status changed', 200);
  }

  /**
  *
  *This function sets the event status to 'c'
  *@param event id
  *@return
  */
  public function CompleteEvent(Request $request, $event_id) {
    if(!isset($request['winner'])) {
      return response()->json('missing parameters', 400);
    }
    if(!Department::find($request['winner'])) {
      return response()->json('department not found', 404);
    }
    if(!$event = Event::find($event_id)) {
      return response()->json('event not found', 404);
    }
    if(!$event->CompleteEvent($request['winner'])) {
      return response()->json('cannot update event status', 500);
    }
    return response()->json('event status changed', 200);
  }

  /**
  *
  *This is used for user authentication using .nitt.edu webmail username
  *and password.
  *@param rollno, password
  *@return
  */
  public function MarathonRegister(Request $request){
      $imap_response = User::AuthenticateStudent($request['rollno'],$request['password']);
      if(!$imap_response) {
        return response()->json("wrong rollno or password", 400);
      }
      if(Marathon::where('rollno', $rollno)) {
        return response()->json("Already Registered", 409);
      }
      $department = Marathon::GetDepartmentByRollNo($request['rollno']);
      if(!$marathonId = Marathon::Register($request['rollno'], $department)) {
        return response()->json("Internal Server Error", 500);
      }
      return response()->json($marathonId, 200);
  }


  /**
  *
  *This function return the list of events 
  *@param
  *@return
  */
  public function GetEventList(){
    $eventlist = Event::GetEventList();
    if(!$eventlist){
      return response()->json("events not found", 400);
    }
    return response()->json($eventlist, 200);
  }

}
