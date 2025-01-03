<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Infromaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infromaciones', function(Blueprint $table){
            $table->id();
            $table->text('logo');
            $table->string('correo');
            $table->string('telefono');
            $table->text('direccion');
            $table->enum('status',['ACTIVE','DEACTIVATE'])->default('ACTIVE');
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
        Schema::dropIfExists('infromaciones');
    }
}
