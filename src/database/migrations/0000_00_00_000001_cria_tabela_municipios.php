<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaMunicipios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('municipio', 100);
            $table->string('uf', 2);
            $table->foreign('uf')->references('uf')->on('ufs');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('municipios');
    }
}
