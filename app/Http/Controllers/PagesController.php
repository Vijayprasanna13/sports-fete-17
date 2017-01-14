<?php
namespace App\Http\Controllers;
class PagesController extends Controller{
  public function GetLoginView(){
    return view('auth.login');
  }
  public function GetAdminView(){
    return view('auth.dashboard');
  }
  public function GetAddScoreView(){
    return view('auth.addScore');
  }
  public function GetEditScoreView(){
    return view('auth.editScore');
  }
  public function GetDepartmentCreateView() {
    return view('auth.departmentCreate');
  }
  public function GetHomepage(){
    return view('index');
  }
  public function GetPhotosView() {
    return view('photos');
  }
  public function GetEventsListView() {
    return view('eventsList');
  }
  public function GetScoreboardView() {
    return view('scoreboard');
  }
  public function GetContactsView() {
    return view('contacts');
  }
}
