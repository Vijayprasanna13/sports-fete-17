<?php
namespace App\Http\Controllers;
session_start();
class PagesController extends Controller{
  public function GetLoginView(){
    return view('auth.login');
  }
  public function GetAdminView(){
    return $_SESSION['username'];
  }
}
