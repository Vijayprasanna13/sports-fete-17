<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("day"); //can be (day) 1 2 or 3
            $table->string("venue");
            $table->boolean("CSE")->default(0);
            $table->boolean("EEE")->default(0);
            $table->boolean("ECE")->default(0);
            $table->boolean("MECH")->default(0);
            $table->boolean("ICE")->default(0);
            $table->boolean("CHEM")->default(0);
            $table->boolean("CIVIL")->default(0);
            $table->boolean("PROD")->default(0);
            $table->boolean("META")->default(0);
            $table->boolean("MTECH")->default(0);
            $table->boolean("ARCH")->default(0);
            $table->boolean("MCA")->default(0);
            $table->boolean("MSC")->default(0);
            $table->boolean("DOMS")->default(0);
            $table->dateTime("start_time");
            $table->string('round');
            $table->string('status')->default('u');
            $table->integer('winner')->unsigned()->nullable();
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
        Schema::dropIfExists('events');
    }
}
