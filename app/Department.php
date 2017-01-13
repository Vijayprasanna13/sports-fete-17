<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Department extends Model{
  protected $table = "departments";
  public static function scores(){
    return Department::select('id','department_name','score')->orderByRaw('CAST(score AS DECIMAL(5,2)) DESC')->get();
  }
  public static function updateScore(Request $request){
    $department = Department::select('score')->where('id',$request['department_id'])->first();
    $score = $department['score'] + $request['score'];
    return (int) Department::where('id',$request['department_id'])->update(['score' => $score]);
  }
  public static function findDepartment($department_id){
    return Department::where('id',$department_id)->first();
  }
}
