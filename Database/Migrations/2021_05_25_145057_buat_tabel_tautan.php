<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelTautan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tautan', function (Blueprint $table) {
            $table->increments('id');

            $table->uuid('uuid');
            $table->string('banner')->nullable();
            $table->string('label')->nullable();
            $table->string('url')->nullable();
            $table->integer('new_tab')->default(0);

            $table->integer('id_operator')->nullable();
            
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
        Schema::dropIfExists('tautan');
    }
}
