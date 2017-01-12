<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class EventsController extends Controller{
    use Validity;
    //Request Parameters : day
    public function GetEvents(Request $request){
      $data = [];
      $data['type'] = 'events';
      $data['day'] = $request['day'];
      $day = $request['day'];
      if($this->isDayValid($day)){
        $data['status'] = '200 OK';
        $data['message'] = 'day found';
        $events = app('db')->select('select * from events where day = '.$day.' order by start_time');
        $data['data'] = $events;
      }
      else{
        $data['status'] = '404 NOT FOUND';
        $data['message'] = 'requested day not found';
        $data['data'] = NULL;
      }
      return json_encode($data);
    }
}
