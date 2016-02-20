<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminInfoUnidade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function (Blueprint $table) {
        $table->increments('id');
        $table->string('meta_plantio');
        $table->string('meta_colheita');
        $table->string('unidade');
        $table->integer('fiscal');
        $table->integer('frota');
        $table->string('meta_tratos');
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
