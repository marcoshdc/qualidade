<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminKm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controlekm', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('matricula');
        $table->string('unidade');
        $table->integer('destinos');
        $table->integer('km_inicial');
        $table->integer('hora_inicial');
        $table->integer('km_final');
        $table->integer('hora_final');
        $table->integer('km_abastecimento');
        $table->integer('qnt_litros');
        $table->integer('unidade_abastecimento');
        $table->integer('frota');
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
