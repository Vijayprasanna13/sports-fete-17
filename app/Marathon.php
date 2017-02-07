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
      case 106: return "CSE";
              break;
      case 104: return "EEE";
              break;
      // case : return "";
      //         break;
      // case : return "";
      //         break;
      // case : return "";
      //         break;
      // case : return "";
      //         break;
      // case : return "";
      //         break;
      // case : return "";
      //         break;
      // case : return "";
      //         break;
      // case : return "";
      //         break;
      // case : return "";
      //         break;
      // case : return "";
      //         break;
      // case : return "";
      //         break;
      // case : return "";
      //         break;
      default: return $rollno;
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
