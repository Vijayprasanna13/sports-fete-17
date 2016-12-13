<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class EventsController extends Controller{
    use Validity;
    public function GetEvents(Request $request){
      $data = [];
      $data['type'] = 'events';
      $data['day'] = $request['day'];
      $day = app('db')->select('select * from days where id = 1')[0]->day;
      if($this->IsDayValid($day)){
        $data['status'] = '200 OK';
        $data['message'] = 'day found';
        $events = app('db')->select('select name from events where day = '.$day.'');
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
