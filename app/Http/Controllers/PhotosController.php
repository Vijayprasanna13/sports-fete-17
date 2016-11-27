<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotosController extends Controller
{
    use Validity;

    public function GetPhotos(Request $request, $id)
    {
        $data = [];
        $data['type'] = 'photos';
        $data['id'] = $id;
        if($this->IsImageIdValid($id)) {
            $data['status'] = '200 OK';
            $data['message'] = 'photo found';
            $image = app('db')->select('SELECT image_location FROM photos WHERE image_id = '.$id.'');
            $data['data'] = $image;
        }
        else {
            $data['status'] = '404 NOT FOUND';
            $data['message'] = 'image not found';
            $data['data'] = NULL;
        }

        return json_encode($data);
    }

    public function PostPhotos(Request $request) {
    	$data = [];
    	if(isset($request['day']) && isset($request['image_location']) && IsDayValid($request['day'])) {
    		$result = app('db')
    		          ->insert('insert into
    		                    photos (day, image_location, updated_at, created_at)
    		                    values (
    		                      "'.(string)$request['day'].'",
    		                      "'.(string)$request['image_loaction'].'",
    		                      "'.(string)date('Y-m-d H:i:s').'",
    		                      "'.(string)date('Y-m-d H:i:s').'")
    		                  ');
    		if($result) {
    			$data['status'] = '200 OK';
    			$data['message'] = 'photo has been added';
    		}
    		else {
    			$data['status'] = '500 ERROR';
    			$data['message'] = 'internal error';
    		}
    	}
    	else {
    		$data['status'] = '400 BAD REQUEST';
    		$data['message'] = 'missing params or invalid day';
    	}
    	return json_encode($data);
    }
}
