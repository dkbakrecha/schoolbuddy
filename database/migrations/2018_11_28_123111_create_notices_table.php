<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('user_id');
            $table->integer('created_by');
            
            $table->string('title');
            $table->text('description');
            $table->integer('notice_type')
                    ->default(0)
                    ->comment('0 = Notice, 1 = PTM, 2 = Complain, 3 = other');
            
            $table->integer('read_status')
                    ->default(0)
                    ->comment('0 = unread, 1 = read');
                    
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
        Schema::dropIfExists('notices');
    }
}
