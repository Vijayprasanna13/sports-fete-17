<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function Login(Request $request) {
        if(!(isset($request['username']) && isset($request['password']))) {
          return response()->json('missing paramters',400);
        }
        $username = (string)$request['username'];
        $password = (string)$request['password'];
        if(!($result = User::getUser($username))) {
          return response()->json('username not found', 404);
        }
        if(User::verifyPassword($result, $password)) {
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
