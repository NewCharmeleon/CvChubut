<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('referentes', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('persona_id')->nullable()->index();
          $table->unsignedInteger('actividad_id')->nullable()->index();
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
        Schema::drop('referentes');
    }
}
