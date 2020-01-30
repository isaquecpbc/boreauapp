<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDividasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dividas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cliente');
            $table->foreign('cliente')->references('id')->on('clientes')->onDelete('cascade');;
            $table->unsignedBigInteger('empresa');
            $table->foreign('empresa')->references('id')->on('empresas')->onDelete('cascade');;
            $table->decimal('divida', 8, 2);
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
        Schema::dropIfExists('dividas');
    }
}
