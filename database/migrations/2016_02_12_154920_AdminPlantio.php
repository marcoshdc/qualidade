<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminPlantio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantio', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('matricula');
        $table->string('total_plantado');
        $table->integer('distribuicao_gema');
        $table->integer('cobricao');
        $table->integer('fertilizante');
        $table->integer('calda');
        $table->integer('gemas_viaveis');
        $table->integer('toletes_amassados');
        $table->integer('toletes_rachados');
        $table->String('observacao');
        
        $table->timestamp('created_at');
        $table->timestamp('updated_at');

        
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
