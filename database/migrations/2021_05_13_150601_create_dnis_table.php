<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dnis', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre'); 
            $table->string('appaterno');
            $table->string('apmaterno'); 
            $table->string('fechanac'); 
            $table->string('sexo'); 
            $table->string('escivil'); 
            $table->string('fechains'); 
            $table->string('fechaemi'); 
            $table->string('fechacad'); 
            $table->string('dninum'); 
            $table->string('dep'); 
            $table->string('prov'); 
            $table->string('dist');
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
        Schema::dropIfExists('dnis');
    }
}
