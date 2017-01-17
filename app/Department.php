<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Department extends Model{
  protected $table = "departments";

  public function scores() {
    return $this->hasMany('App\Score');
  }

  public static function getScores(){
    return Department::join('scores', 'scores.department_id', '=', 'departments.id')
                        ->select(DB::raw('departments.id, departments.department_name, SUM(scores.score) as score'))
                        ->orderBy('score', 'desc')
                        ->groupBy('departments.id')
                        ->get();
    return Department::select('id','department_name','score')->orderByRaw('CAST(score AS DECIMAL(5,2)) DESC')->get();
  }

  public static function updateScore(Request $request){
    $department = Department::select('score')->where('id',$request['department_id'])->first();
    $score = $department['score'] + $request['score'];
    return (int) Department::where('id',$request['department_id'])->update(['score' => $score]);
  }

}
