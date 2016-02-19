<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminColheita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colheita', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('matricula');
        $table->string('total_cana');
        $table->integer('perda');
        $table->integer('erradicacao');
        $table->integer('pisoteio');
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
