<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameDeptIdEventIdOfScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scores', function($table) {
          $table->dropColumn('department_id');
          $table->dropColumn('event_id');
          $table->string('event');
          $table->string('department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('scores', function($table) {
        $table->dropColumn('department');
        $table->dropColumn('event');
        $table->string('event_id');
        $table->string('department_id');
      });
    }
}
