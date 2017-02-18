<?php
namespace App\Http\Controllers;
use App\Department;
class PagesController extends Controller{
  public function RedirectToHomepage() {
    return redirect('/sportsfete');
  }
  public function GetLoginView(){
    return view('auth.login');
  }
  public function GetAdminView(){
    return view('auth.dashboard');
  }
  public function GetScoreView(){
    return view('auth.score');
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
  public function GetEventsView() {
    return view('events');
  }
  public function GetScoreboardView() {
    return view('scoreboard');
  }
  public function GetContactsView() {
    return view('contacts');
  }
  public function GetDepartmentScoreView($department_id) {
    if(!$department = Department::find($department_id)) {
      return redirect('/');
    }
    return view('deptscore', ['department_id' => $department_id,
                              'department_name' => $department['department_name']
                            ]);
  }
}
