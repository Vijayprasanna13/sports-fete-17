<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marathon extends Model{

  protected $table = "marathon";

  public static function GetDepartmentByRollNo($rollno) {
    $rollno = $rollno/6;
    switch ($rollno) {
      case 106: return "CSE";
              break;
      case 104: return "EEE";
              break;
      case : return "";
              break;
      case : return "";
              break;
      case : return "";
              break;
      case : return "";
              break;
      case : return "";
              break;
      case : return "";
              break;
      case : return "";
              break;
      case : return "";
              break;
      case : return "";
              break;
      case : return "";
              break;
      case : return "";
              break;
      case : return "";
              break;
      default: return "Invalid rollno";
    }
  }

  public static function Register($rollno, $department) {
    if(!$count = Marathon::where('department', $department)->max('marathon_id')) {
      
    }

  }
}
