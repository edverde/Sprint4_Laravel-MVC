<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partits', function (Blueprint $table) {
            $table->id();
            $table->string('nom_local')->references('id')->on('equips');
            $table->string('nom_visitant')->references('id')->on('equips');
            $table->date('data');
            $table->time('hora');
            $table->string('estat');
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
        Schema::dropIfExists('partits');
    }
}
