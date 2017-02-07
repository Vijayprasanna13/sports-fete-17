<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMarathonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marathon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rollno');
            $table->string('department');
            $table->integer('marathon_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marathon', function (Blueprint $table) {
          Schema::dropIfExists('marathon');    
        });
    }
}
