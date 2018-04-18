<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            //kolom tabel
            $table->increments('id');
            $table->string('code')->nullable();
            $table->integer('user_id');
            $table->integer('event_id');
            $table->boolean('confirmed');
            $table->string('qrcode')->nullable();
            $table->timestamps();
            //foreign key
            //$table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
