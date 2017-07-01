<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateOferentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('oferentes', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('persona_id')->nullable()->index();
          $table->unsignedInteger('actividad_id')->nullable()->index();
          $table->timestamps();

          $table->foreign('persona_id')->references('id')->on('personas')
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
        Schema::drop('oferentes');
    }
}
