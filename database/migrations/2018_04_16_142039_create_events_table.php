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
            //kolom tabel
            $table->increments('id');
            $table->string('name');
            $table->datetime('start_date');
            $table->string('location');
            $table->text('description');
            $table->string('image');
            $table->integer('event_type_id');
            $table->integer('max_ticket');
            $table->integer('user_id');
            $table->timestamps();
            //foreign key
            //$table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('event_type_id')->references('id')->on('event_types');
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
