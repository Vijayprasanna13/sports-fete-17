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
    
    $backup = $rollno;

    $rollno = $rollno/100000;
    $rollno = (int)$rollno;
    
    $firstdigit = $backup / 100000000;
    $firstdigit = (int)$firstdigit;
    
    if($firstdigit == 4) {
      return "PHD + MSC";
    }
    
    switch ($rollno) {
      case 1021: return "CHEM";
              break;
      case 1011: return "ARCH";
              break;
      case 1031: return "CIVIL";
              break;
      case 1061: return "CSE";
              break;
      case 1071: return "EEE";
              break;
      case 1081: return "ECE";
              break;
      case 1101: return "ICE";
              break;
      case 1111: return "MECH";
              break;
      case 1121: return "META";
              break;
      case 1141: return "PROD";
              break;
      case 2041: return "PHD + MSC";
              break;
      case 2051: return "MCA";
              break;
      case 2132: return "PHD + MSC";
              break;
      case 2151: return "DOMS";
              break;
      case 2162: return "MCA";
              break;
      default: return "MTECH";
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
