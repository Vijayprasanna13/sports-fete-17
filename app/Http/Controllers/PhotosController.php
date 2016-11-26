<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function CheckId($id)
    {
        $found = app('db')->select('SELECT image_id FROM photos WHERE image_id = '.$id.'');
        return $found;
    }

    public function GetPhotos(Request $request, $id)
    {
        $data = [];
        $data['type'] = 'photos';
        $data['id'] = $id;
        $data['count'] = $this->CheckId($id);
        if($this->CheckId($id) !== []) {
            $data['status'] = '200 OK';
            $data['message'] = 'photo found';
            $image = app('db')->select('SELECT image_location FROM photos WHERE image_id = '.$id.'');
            $data['data'] = $image;
        }
        else {
            $data['status'] = '404 NOT FOUND';
            $data['message'] = 'image_id not found';
            $data['data'] = NULL;
        }

        return json_encode($data);
    }

    //
}
