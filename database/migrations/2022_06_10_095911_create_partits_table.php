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
            $table->unsignedBigInteger('equip_local')->nullable();
            $table->unsignedBigInteger('equip_visitant')->nullable();
            $table->foreign('equip_local')->references('id')->on('equips')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('equip_visitant')->references('id')->on('equips')->onDelete('cascade')->onUpdate('cascade');
            $table->date('data_partit');
            $table->time('hora_partit');
            

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
