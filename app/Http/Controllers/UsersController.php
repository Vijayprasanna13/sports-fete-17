<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class UsersController extends Controller
{
    public function Login(Request $request) {
        if(!(isset($request['username']) && isset($request['password']))) {
          return response()->json('missing paramters',400);
        }
        $username = (string)$request['username'];
        $password = (string)$request['password'];
        $result = app('db')->select('select * from users where username = "'.$username.'"');
        if((int)count($result) === 1 && sha1($password.$result[0]->created_at) == $result[0]->password) {
            session_start();
            $_SESSION['username'] = $username;
            return response()->json('success',200);
        }
        return response()->json('invalid credentials',400);
    }

    public function Logout() {
        session_unset();
        session_destroy();
        //return json_encode(['message'=>'Logged out succesfully']);
        return redirect('/auth/login');

    }
}
