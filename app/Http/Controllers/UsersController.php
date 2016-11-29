<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function Login(Request $request) {
        $data = [];
        if(isset($request['username']) && isset($request['password'])) {
            $username = (string)$request['username'];
            $password = (string)$request['password'];
            $result = app('db')
                      ->select('select * from users where username = "'.$username.'"');
            if((int)count($result) === 1 && $password == $result[0]->password) {
                session_start();
                $_SESSION['username'] = $username;
                $data['status'] = '200 Authorized';
                $data['message'] = 'Valid credentials';
                return json_encode($data);
                //return view of loggd in home page
            }
            else {
                $data['status'] = '401 Unauthorized';
                $data['message'] = 'Invalid credentials';
                return json_encode($data);
            }
        }
        else {
            $data['status'] = '400 BAD REQUEST';
            $data['message'] = 'missing params';
            return json_encode($data);
        }
    }

    public function Logout() {
        session_unset();
        session_destroy();
        //return json_encode(['message'=>'Logged out succesfully']);
        return redirect('/auth/login');
    }
}
