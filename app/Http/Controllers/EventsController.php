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
    public function GetEvents($day){

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

}
