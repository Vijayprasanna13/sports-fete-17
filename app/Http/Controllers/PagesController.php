<?php
namespace App\Http\Controllers;
use App\Department;
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
  public function GetDepartmentScoreView($department_id) {
    if(!$department_name = Department::select('department_name')->where('id',$department_id)->first()) {
      return redirect('/');
    }
    return view('deptscore', ['department_id' => $department_id,
                              'department_name' => $department_name['department_name']
                            ]);
  }
}
