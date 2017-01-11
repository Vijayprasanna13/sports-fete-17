<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Department extends Model{
  protected $table = "departments";
  public static function scores(){
    return Department::select('id','department_name','score')->orderByRaw('CAST(score AS DECIMAL(5,2)) DESC')->get();
  }
}
