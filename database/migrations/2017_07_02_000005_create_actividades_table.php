<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('actividades', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('tipo_act_id')->unsigned()->index();
          $table->string('nombre');
          $table->string('descripcion');
          $table->integer('act_esp')->unsigned()->index();
          $table->timestamps();

          $table->foreign('tipo_act_id')->references('id')->on('actividades_tipo')
              ->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('act_esp')->references('id')->on('actividades_especifica')
                  ->onUpdate('cascade')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
}
