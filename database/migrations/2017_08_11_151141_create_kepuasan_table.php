<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKepuasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('kepuasans', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('no');
          $table->string('pendapat');
          $table->string('status');
          $table->date('tanggal');
          $table->time('waktu');
          $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      //  Schema::dropIfExists('kepuasans');
    }
}
