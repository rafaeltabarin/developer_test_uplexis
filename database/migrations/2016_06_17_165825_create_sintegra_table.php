<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSintegraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sintegra', function (Blueprint $table) {
            $table->increments('id');
		 $table->integer('idusuario')->unsigned();
		 $table->string('cnpj', 14);
		 $table->string('resultado_json');
		 $table->foreign('idusuario')
			->references('id')
			->on('usuario');
            $table->timestamps();
		 $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sintegra');
    }
}
