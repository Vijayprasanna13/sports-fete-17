<?php
namespace App\Http\Controllers;
class PagesController extends Controller{
  public function GetLoginView(){
    return view('auth.login');
  }
  public function GetAdminView(){
    return view('auth.dashboard');
  }
  public function GetEventView(){
    return view('auth.event');
  }
  public function GetDepartmentCreateView() {
    return view('auth.departmentCreate');
  }
  public function GetHomepage(){
    return view('index');
  }
}
