<?php
namespace App\Http\Controllers;
class PagesController extends Controller{
  public function GetLoginView(){
    return view('auth.login');
  }
}
