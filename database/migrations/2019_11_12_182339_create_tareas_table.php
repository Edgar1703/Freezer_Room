<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
   Schema::create('tareas', function(Blueprint $table){
      $table->increments('id');
      $table->string('titulo');
      $table->text('descripcion');
      $table->bigInteger('user_id')->unsigned();//TENGO QUE VER LOS PARAMETRO QUE TIENE LA TABLA DE USUARIOS JUNTO CON ESTE,PORQUE SINO, PUEDE OCURRIR ERRORES, POR EJEMPLO LO PRIMERO QUE NO CORRA LAS MIGRACIONES,
      $table->integer('estado_id')->unsigned();
      $table->timestamps();
      $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");//agregamos ->onDelete("cascade") al final con el PROFE
      $table->foreign('estado_id')->references('id')->on('estados');
   });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
   public function down()
{
   Schema::dropIfExists('tareas');
}
}
