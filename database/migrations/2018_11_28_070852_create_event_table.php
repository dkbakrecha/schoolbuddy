<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
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
            $table->integer('class_id')->unsigned()->nullable();
            $table->string('title');
            $table->text('description');
            $table->dateTime('event_date');	
            $table->timestamps();
            $table->integer('status')
                    ->default(1)
                    ->comment('1 = upcoming, 2 = completed');
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
