<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marathon extends Model{

  protected $table = "marathon";

  public static function CheckExists($rollno) {
    if(($marathon = Marathon::where('rollno', $rollno)->first())) {
      return $marathon['marathon_id'];
    }
    return 0;
  }

  public static function GetDepartmentByRollNo($rollno) {
    $rollno = $rollno/1000000;
    $rollno = (int)$rollno;
    switch ($rollno) {
      case 101: return "";
              break;
      case 102: return "CHEM";
              break;
      case 103: return "CIVIL";
              break;
      case 104: return "";
              break;
      case 105: return "";
              break;
      case 106: return "CSE";
              break;
      case 107: return "EEE";
              break;
      case 108: return "ECE";
              break;
      case 109: return "";
              break;
      case 110: return "ICE";
              break;
      case 111: return "MECH";
              break;
      case 112: return "META";
              break;
      case 113: return "";
              break;
      case 114: return "PROD";
              break;
      default: return 'Invalid Roll Number';
    }
  }

  public static function Register($rollno, $department) {
    if(!$count = Marathon::where('department', $department)->max('marathon_id')) {
      $count = 1;
    }
    else {
      $count = $count + 1;
    }
    $marathon = new Marathon;
    $marathon->rollno = $rollno;
    $marathon->department = $department;
    $marathon->marathon_id = $count;
    $marathon->save();
    return $count;
  }
}
