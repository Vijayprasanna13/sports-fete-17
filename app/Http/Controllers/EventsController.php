<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller{
    use Validity;

    //Request Parameters : day
    public function GetEvents(Request $request){

      if(!isset($request['day'])) {
        return response()->json('missing parameter', 400);
      }

      $day = $request['day'];

      if(!$this->isDayValid($day)) {
        return response()->json('day not found', 404);
      }

      if(!($events = Event::getEventsByDay($day))) {
        return response()->json('events not found', 404);
      }

      return response()->json(['data' => $events], 200);
    }
}
